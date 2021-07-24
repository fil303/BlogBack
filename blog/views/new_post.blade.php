@extends('asset.app')
@section('css_file')
  <link rel="stylesheet" href="{{ asset('public/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/vendors/summernote/dist/summernote-bs4.css') }}">
   <link rel="stylesheet" href="{{ asset('public/vendors/jquery-toast-plugin/jquery.toast.min.css') }}">
@endsection
@section('main')

      <div class="card-body bg-success">
          <h3 class="text-center">New Article</h3>
      </div>

      <div class="card-body">
        
          <div class="form-group">
            <label for="exampleInputName1">Category</label>
            <select class="selectpicker" data-width="100%" id="category">
               <option></option>
               <option value="cat_not">Can't Find Category</option>
               <?php echo category(); ?>
            </select>
          </div>
          <div id="custom_cat" style="display: none;" class="form-group">
            <label for="exampleInputName1">Write A Cuitable Category</label>
            <input id="custom_cat" type="text" class="form-control" placeholder="Category Name">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input id="title" type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group" id="notebook">
            <label for="exampleInputName1">Body</label>
            <textarea id="summernote"></textarea>
          </div>
          <button type="submit" onclick="save_post_data(true);pageLoader();return 0;" class="btn btn-primary mr-2">Save At Draft</button>
          <button type="submit" onclick="save_post_data();pageLoader();return 0;" class="btn btn-success mr-2">Post</button>

      </div>

@endsection
@section('js_file')
 <script src="{{ asset('public/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('public/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
  <script src="{{ asset('public/js/toastDemo.js') }}"></script>
  <script src="{{ asset('public/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('public/js/editorDemo.js') }}"></script>

@endsection
@section('js')
var imgPermission = false ;
 document.querySelector('div[id="custom_cat"]').style.display='none';
  $('select[id="category"]').change(function(){
      if($('select[id="category"]').val() == 'cat_not'){
         $('div[id="custom_cat"]').css({'display':'block'});
         return 0;
      }
      $('div[id="custom_cat"]').css({'display':'none'});
  });
 function UploadImage(formData){
     $('#imgloaderSide').html('<div class="modal fade" id="imgloader" data-backdrop="static" data-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="pixel-loader"></div> </div><div class="h3 text-center upload_status">Image Uploading</div></div>');
    $('#imgloader').modal('show');
    $.ajax({
      url : base_url+'upload_image_to_temp',
      type: "POST",
      headers: {'X-CSRF-TOKEN': csrf},
      data : formData,
      processData: false,
      contentType: false,
      success:function(image, textStatus, jqXHR){
          $('.upload_status').text('Upload Finished');
          $('#summernote').summernote('insertImage', image);
          ImageArrayList.push(image);
          $('.modal-backdrop').remove();
          $('#imgloader').remove();
          //console.log(image);
      },
      error: function(jqXHR, textStatus, errorThrown){
          $('.upload_status').text('Upload Failed !!!');
          $('.modal-backdrop').remove();
          $('#imgloader').remove();
      }
    });
  }
  function save_post_data(status = false){
    var cat = $('select[id="category"]').val();
    var cus_cat = $('input[id="custom_cat"]').val();
    var title = $('input[id="title"]').val();
    var body = $('#summernote').summernote('code');
    if(!title.length) {tost_info('Empty Titel !!!','Enter Post Title','bottom-center','info'); return 0;}
    if(body.length  == 11) {tost_info('Empty Body !!!','Enter Post Body','bottom-center','info'); return 0;}
    let form = new FormData();
    if(status) form.append('status', '1');
    else form.append('status', '0');
    if(cus_cat.length > 0 && cat == 'cat_not') form.append('cus_cat', cus_cat);
    else form.append('cat', cat);
    form.append('title',title);
    form.append('body',body);
    form.append('img',JSON.stringify(ImageArrayList));
    $.ajax({
      url : base_url+'upload_post_to_server',
      type: "POST",
      headers: {'X-CSRF-TOKEN': csrf},
      data : form,
      processData: false,
      contentType: false,
      success:function(data, textStatus, jqXHR){
          //console.log(data);
          if(status) window.location.href = base_url+'draft';
          else window.location.href = base_url+'pending';
      },
      error: function(jqXHR, textStatus, errorThrown){
          //if fails     
      }
    });
  }


    document.querySelector('body').addEventListener("DOMNodeRemoved", function (event) {
      if(event.target.tagName == 'IMG'){
             if(event.relatedNode.tagName !== 'BODY'){
                 imgPermission = event.target.getAttribute('src'); 
              }
      }
    });

    document.querySelector('body').addEventListener('keyup', function (event) { deleteTempImageVaiBackspase(); });

    function deleteTempImageVaiBackspase(){
        if(imgPermission){
            $.post(base_url+'delete_temp_file',{_token:csrf,img:imgPermission},function(data){
              ImageArrayList.splice(ImageArrayList.indexOf(imgPermission),1);
              //console.log(ImageArrayList);
            });
           imgPermission = false ;
        }else{
           imgPermission = false ;
        }
    }
@endsection