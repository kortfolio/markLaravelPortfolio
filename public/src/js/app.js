var postId = 0;
var postBodyElement = null;



$(function() {
    $('.pop').on('click', function(event) {

        event.preventDefault();
        postBodyElement = event.target.parentNode.parentNode.childNodes[1].childNodes[1];

        console.log(event.target.parentNode.parentNode.childNodes[1].childNodes[1]);

        var postBody = postBodyElement.textContent;
        console.log(postBody);

        //postId = event.target.parentNode.parentNode.dataset['post-body'];
        document.getElementById("post-body2").innerHTML = postBodyElement.innerHTML ;

      //  $('#post-body').val(postBody);

        $('#imagemodal').modal('show');

    });
});
