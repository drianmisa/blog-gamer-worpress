<?php $current_url = home_url($_SERVER['REQUEST_URI']);
$title = get_the_title()
?>

<div class="shared">
    <h3 class="btn-shared">
        Compartir:
    </h3>
    <ul>
        <li class="icon-shared telegram">
            <a href="javascript:void(0);" onclick="shareOnTelegram('<?php echo $current_url; ?>')">
                <i class="fab fa-telegram-plane"></i>
            </a>
        </li>
        <li class="icon-shared whatsapp">
            <a href="javascript:void(0);" onclick="shareOnWhatsApp('<?php echo $current_url; ?>', '<?php echo $title; ?>')">
                <i class="fab fa-whatsapp"></i>
            </a>
        </li>
        <li class="icon-shared facebook">
            <a href="javascript:void(0);" onclick="shareOnFacebook('<?php echo $current_url; ?>')">
                <i class="fab fa-facebook"></i>
            </a>
        </li>
        <li class="icon-shared twitter">
            <a href="javascript:void(0);" onclick="shareOnTwitter('<?php echo $current_url; ?>')">
                <i class="fas fa-xmark"></i>
            </a>
        </li>
        <li class="icon-shared linkendin">
            <a href="javascript:void(0);" onclick="shareOnLinkedIn('<?php echo $current_url; ?>')">
                <i class="fab fa-linkedin"></i>
            </a>
        </li>
    </ul>
</div>


<script>
    function shareOnWhatsApp(url, text) {
        const whatsappUrl = `https://api.whatsapp.com/send?text=${encodeURIComponent(text)}%20${encodeURIComponent(url)}`;
        window.open(whatsappUrl, '_blank');
    }

    function shareOnTelegram(url) {
        const telegramUrl = `https://t.me/share/url?url=${encodeURIComponent(url)}`;
        window.open(telegramUrl, '_blank');
    }

    function shareOnFacebook(url) {
        const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
        window.open(facebookUrl, '_blank');
    }

    function shareOnTwitter(url) {
        const twitterUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}`;
        window.open(twitterUrl, '_blank');
    }

    function shareOnLinkedIn(url, text) {
        const linkedInUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(url)}`;
        window.open(linkedInUrl, '_blank');
    }
</script>