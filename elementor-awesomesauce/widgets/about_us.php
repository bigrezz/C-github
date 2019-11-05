<?php
namespace ElementorAwesomesauce\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class AboutUs extends Widget_Base {

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
    return 'CrossfitAthlet widget';
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
    return __( 'CrossfitAthlete', 'elementor-awesomesauce' );
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
    return 'fa fa-fire';
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
/**
 *
 * image
 *
 */

		$this->start_controls_section(
			'content_section_image',
			[
				'label' => __( 'Content', 'elementor-awesomesauce' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
    //
		// $this->add_control(
		// 	'image',
		// 	[
		// 		'label' => __( 'Choose Image', 'elementor-awesomesauce' ),
		// 		'type' => \Elementor\Controls_Manager::MEDIA,
		// 		'default' => [
		// 			'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 		],
		// 	]
		// );

 /**
  *
  * text
  *
  */
/*=============================================>>>>>
= top-services =
===============================================>>>>>*/
$this->add_control(
    'widget_title',
    [
      'label' => __( 'Title', 'elementor-awesomesauce' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => __( 'Default title', 'elementor-awesomesauce' ),
      'placeholder' => __( 'Type your title here', 'elementor-awesomesauce' ),
    ]
  );

  $this->add_control(
      'widget_desc',
      [
        'label' => __( 'description', 'elementor-awesomesauce' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __( 'Default desc', 'elementor-awesomesauce' ),
        'placeholder' => __( 'Type your title here', 'elementor-awesomesauce' ),
      ]
    );
/*= End of top-services =*/
/*=============================================<<<<<*/
/*=============================================>>>>>
= text icon and desc =
===============================================>>>>>*/
$this->add_control(
    'widget_title',
    [
      'label' => __( 'Title', 'elementor-awesomesauce' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => __( 'Default title', 'elementor-awesomesauce' ),
      'placeholder' => __( 'Type your title here', 'elementor-awesomesauce' ),
    ]
  );

  $this->add_control(
      'widget_desc',
      [
        'label' => __( 'description', 'elementor-awesomesauce' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __( 'Default desc', 'elementor-awesomesauce' ),
        'placeholder' => __( 'Type your title here', 'elementor-awesomesauce' ),
      ]
    );


  $this->add_control(
      'widget_title2',
      [
        'label' => __( 'Title2', 'elementor-awesomesauce' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __( 'Default title', 'elementor-awesomesauce' ),
        'placeholder' => __( 'Type your title here', 'elementor-awesomesauce' ),
      ]
    );

    $this->add_control(
        'widget_desc2',
        [
          'label' => __( 'description2', 'elementor-awesomesauce' ),
          'type' => \Elementor\Controls_Manager::TEXTAREA,
          'default' => __( 'Default desc', 'elementor-awesomesauce' ),
          'placeholder' => __( 'Type your title here', 'elementor-awesomesauce' ),
        ]
      );


    $this->add_control(
        'widget_title3',
        [
          'label' => __( 'Title3', 'elementor-awesomesauce' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => __( 'Default title3', 'elementor-awesomesauce' ),
          'placeholder' => __( 'Type your title here3', 'elementor-awesomesauce' ),
        ]
      );

      $this->add_control(
          'widget_desc3',
          [
            'label' => __( 'description3', 'elementor-awesomesauce' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __( 'Default desc3', 'elementor-awesomesauce' ),
            'placeholder' => __( 'Type your title here3', 'elementor-awesomesauce' ),
          ]
        );

        $this->add_control(
            'widget_title4',
            [
              'label' => __( 'Titl4', 'elementor-awesomesauce' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => __( 'Default titl4', 'elementor-awesomesauce' ),
              'placeholder' => __( 'Type your title her4', 'elementor-awesomesauce' ),
            ]
          );

          $this->add_control(
              'widget_desc4',
              [
                'label' => __( 'description4', 'elementor-awesomesauce' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Default desc3', 'elementor-awesomesauce' ),
                'placeholder' => __( 'Type your title her4', 'elementor-awesomesauce' ),
              ]
            );



/*= End of text icon and desc =*/
/*=============================================<<<<<*/

    $this->add_control(
        'widget_name_section2',
        [
          'label' => __( 'Name Section 2', 'elementor-awesomesauce' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => __( 'Default name', 'elementor-awesomesauce' ),
          'placeholder' => __( 'Type your title here', 'elementor-awesomesauce' ),
        ]
      );

      		$this->end_controls_section();
  }

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
    <div id="fh5co-services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <i class="sl-icon-paper-plane"></i>
            <h2><?php echo $settings['widget_title'] ?></h2>
            <p><?php echo $settings['widget_desc'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="services">
              <span><i class="sl-icon-graph"></i></span>
              <h2><?php echo $settings['widget_title2'] ?></h2>
              <p><?php echo $settings['widget_desc2'] ?></p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="services">
              <span><i class="sl-icon-camera"></i></span>
              <h2><?php echo $settings['widget_title3'] ?></h2>
              <p><?php echo $settings['widget_desc3'] ?></p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="services">
              <span><i class="sl-icon-support"></i></span>
              <h2><?php echo $settings['widget_title4'] ?></h2>
              <p><?php echo $settings['widget_desc4'] ?></p>
            </div>
          </div>
          <!-- <div class="col-md-4 text-center">
            <div class="services">
              <span><i class="sl-icon-lock"></i></span>
              <h3>Security</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="services">
              <span><i class="sl-icon-key"></i></span>
              <h3>Key Activator</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="services">
              <span><i class="sl-icon-chart"></i></span>
              <h3>Web Development</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <?php

  }

}
