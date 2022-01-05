jQuery(document).ready(function () {
    jQuery('.likes-button').click(function () {
        const $likeButton = jQuery(this);
        const $postId = $likeButton.attr('post-id');

        jQuery
            .post( ajax_script.ajaxurl, {
                post_id: $postId,
                action: 'my_choice'
            })
            .done(function(response){
                console.log(1);
                $likeButton.text(response.data.action === 'deleted' ? 'Like' : 'Dislike');
            });


    });
});
