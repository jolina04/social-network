let postId = 0;
let postBodyElement = null;

$('.post').find('.interaction').find('.edit').on('click', function(){
    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    event.preventDefault();
    let postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);
    $('#edit-modal').modal();
});

$('#modal-save').on('click', function(){
   $.ajax({
      method: 'POST',
      url: url,
      data: {body: $('#post-body').val(), postId: postId, _token: token}
   })
       .done(function(msg){
          $(postBodyElement).text(msg['new_body']);
          $('#edit-modal').modal('hide');
       });
});

$('.like').on('click', function(event){
    event.preventDefault();
    postId = event.target.parentNode.parentNode.dataset['postid'];
    let isLike = event.target.previousElementSibling == null ? true : false;
    console.log(isLike);
    $.ajax({
       method: 'POST',
       url: urlLike,
       data: {isLike: isLike, postId: postId, _token: token }
    })
        .done(function(data){
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You dislike this post' : 'Dislike';
            if(isLike){
                event.target.nextElementSibling.innerText = 'Dislike';
            }else{
                event.target.previousElementSibling.innerText = 'Like';
            }

        })
});
