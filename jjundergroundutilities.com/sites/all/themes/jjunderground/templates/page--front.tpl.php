<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
  
          <div class="top_links">
            <div class="container">
              <div class="row">
                    <div class="col-sm-5 text-left">
                        
                        <ul class="links">
                            <li><a href="tel:1+336+431+6942"><i class="fa fa-phone"></i>(336) 431-6942</a></li>
                            <li><a href="mailto:JJUndergroundUtilitiesLLC@gmail.com"><i class="fa fa-envelope"></i>JJUndergroundUtilitiesLLC@gmail.com</a></li>
                        </ul>
                    
                    </div>
                    
                    <div class="col-sm-7">                        
                        <ul class="pull-right social">
                            
                            <li><a href="https://www.facebook.com/JJUndergroundUtilities?fref=ts" target="blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
                            
                        </ul>                 
                    </div>
                </div>   
            </div>
        </div>
        <section class="main-header">
          <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if ($logo): ?>
                          <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                          </a>
                        <?php endif; ?>
            
                    </div>
                    
                    <div class="col-sm-8 ">
                        <?php if (!empty($page['navigation'])): ?>
                          <?php print render($page['navigation']); ?>
                        <?php endif; ?>
                    </div>  
                </div>
            </div>
          </section>  
        </div>
<section class="slider">
  <?php if (!empty($page['slider'])): ?>
      <?php print render($page['slider']); ?>
  <?php endif; ?>
</section>  
    
 <section class="peopleArea">
    <div class="container">

            <div class="row">
            
                <div class="col-sm-6">
                    
                    <h2>Why Choose Us?</h2>
                
                    <div class="panel panel-default">
                        <div class="panel-body">
                          
                            <div class="row">
                              <div class="col-lg-12">
                                
                                <h3>What We Do</h3>
                              
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <ul class="list-group">
                                        <li class="list-group-item"><i class="fa fa-asterisk"></i>Create long-term partnerships with our clients.</li>
                                        <li class="list-group-item"><i class="fa fa-asterisk"></i>Provide quality, full-service outsourcing.</li>
                                        <li class="list-group-item"><i class="fa fa-asterisk"></i>Provide sustained results. </li>
                                    </ul>

                </div>              
                                <div class="col-md-6">
                                    
                                    <ul class="list-group">
                                        <li class="list-group-item"><i class="fa fa-asterisk"></i>Promote, instill and reinforce safe practices in everything we do.</li>
                                        <li class="list-group-item"><i class="fa fa-asterisk"></i>Are Impassioned and Empowered in everything we do.</li>
                                        <li class="list-group-item"><i class="fa fa-asterisk"></i>Create advanced solutions.</li>
                                    </ul>

                </div>              
                            </div>
                                                    
                        </div>
                    </div>

                </div>
            
                <div class="col-sm-6">
                    
                    <h2>Quality First</h2>
                
                    <div class="panel panel-default">
                        <div class="panel-body">
                        
                         <p>J&J Underground Utilities has a fleet of equipment operated by experienced crews.  No matter the job size, rural or metropolitan, you can trust the experts at J&J Underground Utilities.</p>
                          
                            
                          
                         <p>J&J Underground Utilities continues to grow our company exponentially.  We have designed a successful plan for this by providing incentives to our employees and keeping them well trained therefore delivering top results with no complaints</p>
                        
                         <p>J&J Underground Utilities encourages open communication in order to improve customer satisfaction.  While in the field, our employees represent J&J Underground with nothing less than professionalism; therefore we represent our customer's place of business the same.</p>
                          
                        </div>
                    </div>

                </div>
            
            </div>
        
        </div>
    </section>

  <section id="serviceArea">
      <span class="bg"></span>
    <div class="container">
        
          <div class="row">
                <div class="col-sm-12 text-center">

                    <h2>We Strive For Excellence</h2>
                    
                    <h4>We believe that “quality of service” will build a long-term professional relationship.</h4>
        
                </div>
            </div>

      <div class="row">
        <div class="col-sm-12">
          <?php if (!empty($page['service_area'])): ?>
              <?php print render($page['service_area']); ?>
          <?php endif; ?>
        </div>
        
      </div>
    </div>
  </section>
   <section class="accountArea">
    <div class="container">
        
          <div class="row range work">
                <div class="col-sm-3">
                    
                    <h2>J&J <span>Specializes In</span></h2>
                    
                    <p></p>
                    
                    <ul class="list-group list-unstyled">
                        <li><i class="fa fa-check-square"></i>Directional Drilling</li>
                        <li><i class="fa fa-check-square"></i>Trenching</li>
                        <li><i class="fa fa-check-square"></i>Plowing</li>
                        <li><i class="fa fa-check-square"></i>Fiber Jetting</li>
                        <li><i class="fa fa-check-square"></i>Handholes/Manholes</li>
                        <li><i class="fa fa-check-square"></i>Micro Trenching</li>
                        <li><i class="fa fa-check-square"></i>Water and Sewer</li>
                    </ul>
                
                </div>
                <div class="col-sm-6">

                    <h2>Crew <span>Pride</span></h2>
          
                   <img src="/sites/default/files/index_img.jpg" width="100%" height="auto"/>
                    
                </div>
                <div class="col-sm-3">

                    <h2>Our<span> Crews</span></h2>
          
                    <ul class="panel-group" id="accordion">
                        <li class="panel panel-default">
                            <div class="top panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Experts</a>
                            </div>
                            
                             <div id="collapseOne" class="panel-collapse collapse in">
                                
                                <p>J&J Underground Utilities is committed to the use of innovative technologies to grow & improve our company and increase our service offerings.  This can be obtained by consistently exceeding our client’s expectations through continuous re-evaluation and improvement.</p>
                                
                            </div>
                        
                        </li>
                        <li class="panel panel-default">
                            <div class="top panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapseTwo">Quality</a>
                            </div>
                            
                             <div id="collapseTwo" class="panel-collapse collapse">
                                  
                                <p>J&J Underground Utilities is committed to creating close partnerships with our clients, employees, communities and vendors.  We continue to set high expectations that will exemplify our dedication to extraordinary service. </p>
                          
                            </div>
                        
                        </li>
                        <li class="panel panel-default">
                            <div class="top panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapseThree">Backgrounds</a>
                            </div>
                            
                             <div id="collapseThree" class="panel-collapse collapse">
                                
                                <p>We work hard to be a company where employees are proud to be part of the team, customers trust us, and shareholders want to invest in us.  To ensure this, all employees have had extensive background checks and are subject to random drug testing.</p>
                        
                            </div>
                        
                        </li>
                    </ul>
                    
                </div>
            </div>
        
        </div>
    </section>

<section class="footerarea">
<?php if (!empty($page['footer'])): ?>
  <div class=" text-center">
    <?php print render($page['footer']); ?>
  </div>
<?php endif; ?>
</section>