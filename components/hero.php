<?php 
    $data = getData();
    $cta_arrow='<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM15 8L15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L15 8ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893C6.90237 0.683417 6.90237 1.31658 7.29289 1.70711L8.70711 0.292893ZM7.29289 14.2929C6.90237 14.6834 6.90237 15.3166 7.29289 15.7071C7.68342 16.0976 8.31658 16.0976 8.70711 15.7071L7.29289 14.2929ZM1 9H15V7H1V9ZM7.29289 1.70711L14.2929 8.70711L15.7071 7.29289L8.70711 0.292893L7.29289 1.70711ZM14.2929 7.29289L7.29289 14.2929L8.70711 15.7071L15.7071 8.70711L14.2929 7.29289Z" fill="#7A8298"/></svg>';
?>

<div class="hero" id="hero">
    <div class="bg-img">
        <?php echo wp_get_attachment_image($data['bg_image'], 'full') ?>
    </div>
    <div class="container">
        <div class="left-col">
            <h1><?php echo $data['title'] ?></h1>
            <?php if(!empty($data['btn_url'])): ?>
            <a href="<?php echo $data['btn_url'] ?>" class="cta-btn">
                <?php echo $data['btn_title'] ?>
                <div class="arrow">
                    <?php echo $cta_arrow ?>
                </div>
            </a>
            <?php endif ?>

            <div class="app-playstore">
                <?php if(!empty($data['app_store_url'])): ?>
                <a href="<?php echo $data['app_store_url'] ?>">
                    <img src="<?php echo IMG.'/app-store-icon.svg' ?>" alt="App store icon">
                </a>
                <?php endif ?>

                <?php if(!empty($data['play_store_url'])): ?>
                <a href="<?php echo $data['play_store_url'] ?>">
                    <img src="<?php echo IMG.'/play-store-icon.svg' ?>" alt="Play store icon"> 
                </a>
                <?php endif ?>

            </div>
        </div>

        <div class="right-col">
            <?php echo wp_get_attachment_image($data['image'], 'full') ?>
            <?php echo wp_get_attachment_image($data['image_mob'], 'full') ?>
        </div>
    </div>
</div>