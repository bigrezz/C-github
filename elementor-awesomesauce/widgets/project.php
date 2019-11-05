<?php
namespace ElementorAwesomesauce\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class ProjectWidget extends Widget_Base {

  /**
   * Retrieve the widget name.
   *
   * @since 1.1.0
   *
   * @access public
   *
   * @return string Widget name.
   */
  public function get_name() {
    return 'ProjectWidget';
  }

  /**
   * Retrieve the widget title.
   *
   * @since 1.1.0
   *
   * @access public
   *
   * @return string Widget title.
   */
  public function get_title() {
    return __( 'ProjectWidget', 'elementor-awesomesauce' );
  }

  /**
   * Retrieve the widget icon.
   *
   * @since 1.1.0
   *
   * @access public
   *
   * @return string Widget icon.
   */
  public function get_icon() {
    return 'fa fa-cat';
  }

  /**
   * Retrieve the list of categories the widget belongs to.
   *
   * Used to determine where to display the widget in the editor.
   *
   * Note that currently Elementor supports only one category.
   * When multiple categories passed, Elementor uses the first one.
   *
   * @since 1.1.0
   *
   * @access public
   *
   * @return array Widget categories.
   */
  public function get_categories() {
    return [ 'CrosFit2Category' ];
  }

  /**
   * Register the widget controls.
   *
   * Adds different input fields to allow the user to change and customize the widget settings.
   *
   * @since 1.1.0
   *
   * @access protected
   */
  protected function _register_controls() {
    $this->start_controls_section(
      'services_section',
      [
        'label' => __( 'Content', 'elementor-awesomesauce' ),
      ]
    );

    $this->add_control(
      'title_services_section',
      [
        'label' => __( 'Title', 'elementor-awesomesauce' ),
        'type' => Controls_Manager::TEXT,
        'default' => __( 'Title', 'elementor-awesomesauce' ),
      ]
    );

    $this->add_control(
      'description_services_section',
      [
        'label' => __( 'Description', 'elementor-awesomesauce' ),
        'type' => Controls_Manager::TEXTAREA,
        'default' => __( 'Description', 'elementor-awesomesauce' ),
      ]
    );
    $this->end_controls_section();

//     $this->start_controls_section(
//   'content_section_cool',
//   [
//     'label' => __( 'Repeter Menu', 'elementor-awesomesauce' ),
//     'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
//   ]
// );
//
// $repeater = new \Elementor\Repeater();
//
// $repeater->add_control(
//     'social_icon',
//     [
//         'label'   => __( 'Choose Icon', 'karauos' ),
//         'type'    => Controls_Manager::ICON,
//         'default' => 'fa fa-facebook',
//     ]
// );
//
// $repeater->add_control(
//   'list_title', [
//     'label' => __( 'Title', 'elementor-awesomesauce' ),
//     'type' => \Elementor\Controls_Manager::TEXT,
//     'default' => __( 'List Title' , 'elementor-awesomesauce' ),
//     'label_block' => true,
//   ]
// );
//
// $repeater->add_control(
//   'list_color',
//   [
//     'label' => __( 'Color', 'elementor-awesomesauce' ),
//     'type' => \Elementor\Controls_Manager::COLOR,
//     'selectors' => [
//     '{{WRAPPER}} .row  {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
//     ],
//   ]
// );


// $this->add_control(
//   'list',
//   [
//     'label' => __( 'Repeater List', 'elementor-awesomesauce' ),
//     'type' => \Elementor\Controls_Manager::REPEATER,
//     'fields' => array_values( $repeater->get_controls() ),
//     'default' => [
//       [
//         'social_icon' => __( 'fa fa-facebook', 'elementor-awesomesauce' ),
//         'list_title' => __( 'change title', 'elementor-awesomesauce' ),
//       ],
//       [
//         'social_icon' => __( 'fa fa-twitter', 'elementor-awesomesauce' ),
//         'list_title' => __( 'chabge title.', 'elementor-awesomesauce' ),
//       ],
//       [
//         'social_icon' => __( 'fa fa-google-plus', 'elementor-awesomesauce' ),
//         'list_title' => __( 'chabge title.', 'elementor-awesomesauce' ),
//       ],
//       [
//         'social_icon' => __( 'fa fa-youtube', 'elementor-awesomesauce' ),
//         'list_title' => __( 'chabge title.', 'elementor-awesomesauce' ),
//       ],
//     ],
//     'title_field' => '{{{ list_title }}}',
//   ]
// );
//
$this->end_controls_section();

$this->start_controls_section(
  'image_section',
  [
    'label' => __( 'image Changing', 'elementor-awesomesauce' ),
  ]
);




$this->end_controls_section();




    /*=============================================>>>>>
    = icon changer =
    ===============================================>>>>>*/


	}
    /*= End of icon changer =*/
    /*=============================================<<<<<*/


  /**
   * Render the widget output on the frontend.
   *
   * Written in PHP and used to generate the final HTML.
   *
   * @since 1.1.0
   *
   * @access protected
   */
  protected function render() {
    $settings = $this->get_settings_for_display();
    ?>
    <div id="fh5co-portfolio-section">
      <div class="portfolio-row-half">
        <div class="portfolio-grid-item-color">
          <div class="desc">
            <h2><?php echo $settings['title_services_section'] ?></h2>
            <p><?php echo $settings['description_services_section2'] ?></p>
            <p><a href="#" class="btn btn-primary btn-outline with-arrow">View All Projects <i class="icon-arrow-right22"></i></a></p>
          </div>
        </div>
        <a href="#" class="portfolio-grid-item" style="background-image: url(images/project-2.jpg);">
          <div class="desc2">
            <h3>Shoes</h3>
            <span>Travel</span>
            <i class="sl-icon-heart"></i>
          </div>
        </a>
        <a href="#" class="portfolio-grid-item" style="background-image: url(images/project-3.jpg);">
          <div class="desc2">
            <h3>Shoes</h3>
            <span>Travel</span>
            <i class="sl-icon-heart"></i>
          </div>
        </a>
        <a href="#" class="portfolio-grid-item" style="background-image: url(images/project-4.jpg);">
          <div class="desc2">
            <h3>Shoes</h3>
            <span>Travel</span>
            <i class="sl-icon-heart"></i>
          </div>
        </a>
        <a href="#" class="portfolio-grid-item" style="background-image: url(images/project-5.jpg);">
          <div class="desc2">
            <h3>Shoes</h3>
            <span>Travel</span>
            <i class="sl-icon-heart"></i>
          </div>
        </a>
        <a href="#" class="portfolio-grid-item"><img src="https://s22380.pcdn.co/wp-content/uploads/Umehata-SSA22-600px.jpg" alt="">
          <div class="desc2">
            <h3>Shoes</h3>
            <span>Travel</span>
            <i class="sl-icon-heart"></i>
          </div>
        </a>
        <a href="#" class="portfolio-grid-item" style="background-image: url(images/project-1.jpg);">
          <div class="desc2">
            <h3>Shoes</h3>
            <span>Travel</span>
            <i class="sl-icon-heart"></i>
          </div>
        </a>
        <a href="#" class="portfolio-grid-item" style="background-image: url(images/project-2.jpg);">
          <div class="desc2">
            <h3>Shoes</h3>
            <span>Travel</span>
            <i class="sl-icon-heart"></i>
          </div>
        </a>
      </div>
    </div>




  <?php $this->add_inline_editing_attributes( 'title_services_section', 'none' );
        $this->add_inline_editing_attributes( 'description', 'basic' );
        $this->add_inline_editing_attributes( 'content', 'advanced' );
    ?>
    <h2 <?php echo $this->get_render_attribute_string( 'title_services_section' ); ?>><?php  //echo $settings['title']; ?></h2>
    <div <?php echo $this->get_render_attribute_string( 'description' ); ?>><?php //echo $settings['description']; ?></div>
    <div <?php echo $this->get_render_attribute_string( 'content' ); ?>><?php //echo $settings['content']; ?></div>
    <?php
  }

}
