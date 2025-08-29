<?php require('templates/backend/projects.php'); ?>
    
    <div class="page-block">
        <!-- Clients Work -->
        <div class="service-block">
            <h1>Our Work</h1>
            <p>We’ve had the privilege of working with a range of clients—delivering custom websites for contractors and small businesses that highlight their services, improve online presence, and bring in more leads.</p>
            <!-- Facebook posts -->
            <div class="facebook-block">
                <!-- Back Arrow -->
                <button class="btn" onclick="prev_post('client')" type="button"><</button>
                <!-- Gallery -->
                <div class="gallery-block">
                    <!-- Every Post's/Image -->
                     <?php foreach ($clients_posts as $index => $post) {?>
                            <div class="post-block" id="client-post-<?php echo $index+1; ?>">
                                
                                <!-- Message -->
                                <?php if (!empty($post['message'])) { ?>
                                    <p><?php echo $post['message'] ?></p>
                                <?php } ?>

                                <!-- Image -->
                                <?php if (!empty($post['full_picture'])) { ?>
                                    <img src="<?php echo $post['full_picture'] ?>" style="width:300px; height:400px; border-radius: 16px">
                                <?php } ?>

                                <!-- Time Stamp -->
                                <small><?php echo $post['created_time'] ?></small>
                            </div>
                    <?php } ?>
                </div>
                <!-- Next Arrow -->
                <button class="btn" onclick="next_post('client')" type="button">></button>

            </div>
        </div>

        <!-- Generator Work -->
        <div class="service-block">
            <h2>Generator Installations</h2>
            <p>We’ve built project pages and portfolios for clients specializing in generator installs, helping them stand out in a competitive market with clear service descriptions and photo galleries.</p>
            <!-- Facebook posts -->
            <div class="facebook-block">
                <!-- Back Arrow -->
                <button class="btn" onclick="prev_post('generators')" type="button"><</button>
                <!-- Gallery -->
                <div class="gallery-block">
                    <!-- Every Post's/Image -->
                     <?php foreach ($generators_posts as $index => $post) {?>
                            <div class="post-block" id="generators-post-<?php echo $index+1; ?>">
                                
                                <!-- Message -->
                                <?php if (!empty($post['message'])) { ?>
                                    <p><?php echo $post['message'] ?></p>
                                <?php } ?>

                                <!-- Image -->
                                <?php if (!empty($post['full_picture'])) { ?>
                                    <img src="<?php echo $post['full_picture'] ?>" style="width:300px; height:400px; border-radius: 16px">
                                <?php } ?>

                                <!-- Time Stamp -->
                                <small><?php echo $post['created_time'] ?></small>
                                
                            </div>

                    <?php } ?>
                </div>
                <!-- Next Arrow -->
                <button class="btn" onclick="next_post('generators')" type="button">></button>
            </div>
        </div>

        <!-- Electrical Needs Work -->
        <div class="service-block">
            <h2>Residential & Commercial Electrical</h2>
            <p>Our websites for electricians showcase both residential and commercial services, making it easy for customers to understand offerings and request a quote quickly.</p>
            <!-- Facebook posts -->
            <div class="facebook-block">
                <!-- Back Arrow -->
                <button class="btn" onclick="prev_post('electrical_needs')" type="button"><</button>
                <!-- Gallery -->
                <div class="gallery-block">
                    <!-- Every Post's/Image -->
                    <?php foreach ($electrical_needs_posts as $index => $post) {?>
                            <div class="post-block" id="electrical_needs-post-<?php echo $index+1; ?>">
                                
                                <!-- Message -->
                                <?php if (!empty($post['message'])) { ?>
                                    <p><?php echo $post['message'] ?></p>
                                <?php } ?>

                                <!-- Image -->
                                <?php if (!empty($post['full_picture'])) { ?>
                                    <img src="<?php echo $post['full_picture'] ?>" style="width:300px; height:400px; border-radius: 16px">
                                <?php } ?>

                                <!-- Time Stamp -->
                                <small><?php echo $post['created_time'] ?></small>
                                
                            </div>

                    <?php } ?>
                </div>
                <!-- Next Arrow -->
                <button class="btn" onclick="next_post('electrical_needs')" type="button">></button>
            </div>
        </div>

        <!-- Utilities Work -->
        <div class="service-block">
            <h2>Utility Pole & Infrastructure Services</h2>
            <p>We’ve helped utility contractors present their large-scale projects with clean layouts, embedded maps, and trust-building testimonials from past jobs.</p>
            <!-- Facebook posts -->
            <div class="facebook-block">
                <!-- Back Arrow -->
                <button class="btn" onclick="prev_post('utility')" type="button"><</button>
                <!-- Gallery -->
                <div class="gallery-block">
                    <!-- Every Post's/Image -->
                    <?php foreach ($utility_poles_posts as $index => $post) {?>
                            <div class="post-block" id="utility-post-<?php echo $index+1; ?>">
                                
                                <!-- Message -->
                                <?php if (!empty($post['message'])) { ?>
                                    <p><?php echo $post['message'] ?></p>
                                <?php } ?>

                                <!-- Image -->
                                <?php if (!empty($post['full_picture'])) { ?>
                                    <img src="<?php echo $post['full_picture'] ?>" style="width:300px; height:400px; border-radius: 16px">
                                <?php } ?>

                                <!-- Time Stamp -->
                                <small><?php echo $post['created_time'] ?></small>
                                
                            </div>

                    <?php } ?>
                </div>
                <!-- Next Arrow -->
                <button class="btn" onclick="next_post('utility')" type="button">></button>
            </div>
        </div>
    </div>
