<div class="tab-content-box">
      <div class="content">

        <ul class="nav nav-tabs">
          <li class="active"><a  href="#application" data-toggle="tab">your application</a></li>
          <li><a  href="#products" data-toggle="tab">our products</a></li>
          <li><a  href="#services" data-toggle="tab">our services</a></li>
        </ul>

        <div class="tab-content">

          <div class="tab-pane active" id="application">
            <div class="txt">
              <?php $args = array('post_type' => 'applications', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="application-item"><a href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon-bookmark"></span> <?php the_title(); ?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
          <!--end-->

          <div class="tab-pane fade" id="products">
            <div class="row sub-pane-content-box">
              <div class="col-md-3"> <!-- required for floating -->
                <!-- Nav tabs -->
                <div class="nav nav-tabs"><!-- 'tabs-right' for right tabs -->
                  <div class="active"><a href="#sample" data-toggle="tab"><span class="glyphicon glyphicon-menu-right"></span> sample</a></div>
                  <div><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-menu-right"></span> Profile</a></div>
                  <div><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-menu-right"></span> Messages</a></div>
                </div>
              </div>
              <div class="col-md-9">
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane active" id="sample">
                      <div class="row">
                        <div class="col-md-3"><div><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/topaq.jpg"></div></div>
                        <div class="col-md-9">
                          <h4>Sample 001</h4>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p><a href="#"><span class="glyphicon glyphicon-hand-right"></span> Read More</a></p>
                        </div>
                      </div>  
                    </div>
                    <!--end of #sample-->

                    <div class="tab-pane" id="profile">
                      <div class="row">
                        <div class="col-md-3"><div><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/sigma-nip-i.jpg"></div></div>
                        <div class="col-md-9">
                          <h4>Sample 002</h4>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p><a href="#"><span class="glyphicon glyphicon-hand-right"></span> Read More</a></p>
                        </div>
                      </div>
                    </div>
                    <!--end of #profile-->
                    <div class="tab-pane" id="messages">
                    <div class="row">
                        <div class="col-md-3"><div><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/technical-seminar.jpg"></div></div>
                        <div class="col-md-9">
                          <h4>Sample 003</h4>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p><a href="#"><span class="glyphicon glyphicon-hand-right"></span> Read More</a></p>
                        </div>
                      </div>
                    </div>
                    <!--end of #messages-->
                    
                  </div>
              </div>
            </div>
            <!--end of row-->
          </div>
          <!--end-->

          <div class="tab-pane fade" id="services">
            <div class="row sub-pane-content-box">
              <div class="col-md-3"> <!-- required for floating -->
                <!-- Nav tabs -->
                <div class="nav nav-tabs"><!-- 'tabs-right' for right tabs -->
                  <div class="active"><a href="#sample2" data-toggle="tab"><span class="glyphicon glyphicon-menu-right"></span> sample</a></div>
                  <div><a href="#profile2" data-toggle="tab"><span class="glyphicon glyphicon-menu-right"></span> Profile</a></div>
                  <div><a href="#messages2" data-toggle="tab"><span class="glyphicon glyphicon-menu-right"></span> Messages</a></div>
                </div>
              </div>
              <div class="col-md-9">
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane active" id="sample2">
                      <div class="row">
                        <div class="col-md-3"><div><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/topaq.jpg"></div></div>
                        <div class="col-md-9">
                          <h4>Sample 001</h4>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p><a href="#"><span class="glyphicon glyphicon-hand-right"></span> Read More</a></p>
                        </div>
                      </div>  
                    </div>
                    <!--end of #sample-->

                    <div class="tab-pane" id="profile2">
                      <div class="row">
                        <div class="col-md-3"><div><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/sigma-nip-i.jpg"></div></div>
                        <div class="col-md-9">
                          <h4>Sample 002</h4>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p><a href="#"><span class="glyphicon glyphicon-hand-right"></span> Read More</a></p>
                        </div>
                      </div>
                    </div>
                    <!--end of #profile-->
                    <div class="tab-pane" id="messages2">
                    <div class="row">
                        <div class="col-md-3"><div><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/technical-seminar.jpg"></div></div>
                        <div class="col-md-9">
                          <h4>Sample 003</h4>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p><a href="#"><span class="glyphicon glyphicon-hand-right"></span> Read More</a></p>
                        </div>
                      </div>
                    </div>
                    <!--end of #messages-->
                    
                  </div>
              </div>
            </div>
            <!--end of row-->
          </div>
          <!--end-->

        </div>
        <!--end of .tab-content-->

      </div>
    </div>