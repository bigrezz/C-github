<?php
namespace ElementorAwesomesauce\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class ServicesWidget extends Widget_Base {

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
    return 'ServicesWidget';
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
    return __( 'ServicesWidget', 'elementor-awesomesauce' );
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
    return 'fa fa-bell';
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




 /**
  *
  * text
  *
  */


    $this->start_controls_section(
      'booking_classes',
      [
        'label' => __( 'Edit Content Of Boxes', 'elementor-awesomesauce' ),
      ]
    );
    //
    // $this->add_control(
		// 	'image',
		// 	[
		// 		'label' => __( 'Choose Image', 'elementor' ),
		// 		'type' => \Elementor\Controls_Manager::MEDIA,
		// 		'default' => [
    //       'url' => get_template_directory_uri() . '/images/wavy-hair-18-top-2.jpg',
		// 		],
		// 	]
		// );

    // $this->add_group_control(
    //     \Elementor\Group_Control_Image_Size::get_type(),
    //     [
    //         'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
    //         'exclude' => [ 'custom' ],
    //         'separator' => 'none',
    //     ]
    // );
//
// $this->add_group_control(
//   \Elementor\Group_Control_Typography::get_type(),
//   [
//     'name' => 'title_typography',
//     'selector' => '{{WRAPPER}} .booking-heading',
//   ]
// );

    $this->add_control(
      'title_booking_classes',
      [
        'label' => __( 'Edit Title', 'elementor-awesomesauce' ),
        'type' => \Elementor\ Controls_Manager::TEXT,
        'default' => __( 'Title', 'elementor-awesomesauce' ),
      ]
    );

    $this->add_control(
      'description_booking_classes',
      [
        'label' => __( 'Edit Description', 'elementor-awesomesauce' ),
        'type' => Controls_Manager::TEXTAREA,
        'default' => __( 'Description', 'elementor-awesomesauce' ),
      ]
    );

    /**
     *
     * box 2
     *
     */
     $this->add_control(
       'title_booking_classes2',
       [
         'label' => __( 'Edit Title 2', 'elementor-awesomesauce' ),
         'type' => \Elementor\ Controls_Manager::TEXT,
         'default' => __( 'Title', 'elementor-awesomesauce' ),
       ]
     );

     $this->add_control(
       'description_booking_classes2',
       [
         'label' => __( 'Edit Description 2', 'elementor-awesomesauce' ),
         'type' => Controls_Manager::TEXTAREA,
         'default' => __( 'Description', 'elementor-awesomesauce' ),
       ]
     );

     $this->add_control(
       'author_name',
       [
         'label' => __( 'Edit Auothor', 'elementor-awesomesauce' ),
         'type' => \Elementor\ Controls_Manager::TEXT,
         'default' => __( 'Title', 'elementor-awesomesauce' ),
       ]
     );


    // $this->add_control(
    //   'content',
    //   [
    //     'label' => __( 'Content', 'elementor-awesomesauce' ),
    //     'type' => Controls_Manager::WYSIWYG,
    //     'default' => __( 'Content', 'elementor-awesomesauce' ),
    //   ]
    // );
    //
    // $this->add_control(
    // 	'popover-toggle',
    // 	[
    // 		'label' => __( 'Box', 'elementor-awesomesauce' ),
    // 		'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
    // 		'label_off' => __( 'Default', 'elementor-awesomesauce' ),
    // 		'label_on' => __( 'Custom', 'elementor-awesomesauce' ),
    // 		'return_value' => 'yes',
    // 	]
    // );
    //
    // $this->start_popover();

    $this->end_controls_section();


    $this->start_controls_section(
    'right_content',
    [
      'label' => __( 'Edit Top Content', 'elementor-awesomesauce' ),
    ]
    );

    $this->add_control(
      'top_content',
      [
        'label' => __( 'Edit Title', 'elementor-awesomesauce' ),
        'type' => \Elementor\ Controls_Manager::TEXT,
        'default' => __( 'Title', 'elementor-awesomesauce' ),
      ]
    );

    /*=============================================>>>>>
    = icno title and description 1 =
    ===============================================>>>>>*/
    $this->add_control(
      'i_title1',
      [
        'label' => __( 'Edit Title', 'elementor-awesomesauce' ),
        'type' => \Elementor\ Controls_Manager::TEXT,
        'default' => __( 'Title', 'elementor-awesomesauce' ),
      ]
    );

    $this->add_control(
      'i_description1',
      [
        'label' => __( 'Edit Description', 'elementor-awesomesauce' ),
        'type' => Controls_Manager::TEXTAREA,
        'default' => __( 'Description', 'elementor-awesomesauce' ),
      ]
    );



    /*= End of icno title and description 1 =*/
    /*=============================================<<<<<*/

    /*=============================================>>>>>
    = icno title and description 2 =
    ===============================================>>>>>*/
    $this->add_control(
      'i_title2',
      [
        'label' => __( 'Edit Title 2', 'elementor-awesomesauce' ),
        'type' => \Elementor\ Controls_Manager::TEXT,
        'default' => __( 'Title', 'elementor-awesomesauce' ),
      ]
    );

    $this->add_control(
      'i_description2',
      [
        'label' => __( 'Edit Description 2', 'elementor-awesomesauce' ),
        'type' => Controls_Manager::TEXTAREA,
        'default' => __( 'Description', 'elementor-awesomesauce' ),
      ]
    );



    /*= End of icno title and description 2 =*/
    /*=============================================<<<<<*/

    /*=============================================>>>>>
    = icno title and description 3 =
    ===============================================>>>>>*/
    $this->add_control(
      'i_title3',
      [
        'label' => __( 'Edit Title3', 'elementor-awesomesauce' ),
        'type' => \Elementor\ Controls_Manager::TEXT,
        'default' => __( 'Title', 'elementor-awesomesauce' ),
      ]
    );

    $this->add_control(
      'i_description3',
      [
        'label' => __( 'Edit Description 3', 'elementor-awesomesauce' ),
        'type' => Controls_Manager::TEXTAREA,
        'default' => __( 'Description', 'elementor-awesomesauce' ),
      ]
    );



    /*= End of icno title and description 3 =*/
    /*=============================================<<<<<*/


    $this->end_controls_section();

		$this->start_controls_section(
			'section_style_caption',
			[
				'label' => __( 'Caption', 'elementor' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .col-half-inner',
			]
		);

		$this->add_control(
			'caption_align',
			[
				'label' => __( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor' ),
						'icon' => 'fa fa-align-right',
					],
					'justify' => [
						'title' => __( 'Justified', 'elementor' ),
						'icon' => 'fa fa-align-justify',
					],
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .widget-image-caption' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => __( 'Text Color Boxes2', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .col-half.col-half-color .row-half .col-half-inner.col-half-inner-bg' => 'color: {{VALUE}};',
				],
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_3,
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'caption_typography',
				'selector' => '{{WRAPPER}} .widget-image-caption',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_3,
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
    <div id="fh5co-section">
      <div class="col-half col-half-color">
        <div class="row-half">
          <div class="col-half-inner col-half-inner-bg">
            <div class="desc">
              <h3><?php echo $settings['title_booking_classes'] ?></h3>
              <p><?php echo $settings['description_booking_classes'] ?></p>
              <p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More <i class="icon-arrow-right22"></i></a></p>
            </div>
          </div>
          <a href="#" class="col-half-inner grid-item" style="background-image: url(images/project-1.jpg);">
            <div class="desc2">
              <h3>Bag</h3>
              <span>Travel</span>
            </div>
          </a>
        </div>
        <div class="row-half">
          <a href="#" class="col-half-inner grid-item" style="background-image: url(images/project-2.jpg);">
            <div class="desc2">
              <h3>Shoes</h3>
              <span>Travel</span>
            </div>
          </a>
          <div class="col-half-inner col-half-inner-bg2">
            <div class="desc">
              <h3><?php echo $settings['title_booking_classes2'] ?><i class="icon-quotes-right"></i> </h3>
              <blockquote>
                <p><?php echo $settings['description_booking_classes2'] ?></p>
                <span><a class="client" href="#">&mdash;<?php echo $settings['author_name'] ?></a></span>
              </blockquote>
            </div>
          </div>
        </div>
      </div>


      <div class="col-half col-half-2">
        <h2><?php echo $settings['top_content'] ?></h2>
        <div class="featured-inner">
          <i class="sl-icon-chart"></i>
          <div class="desc">
            <h3><?php echo $settings['i_title1'] ?></h3>
            <p><?php echo $settings['i_description1'] ?></p>
          </div>
        </div>
        <div class="featured-inner">
          <i class="sl-icon-screen-tablet"></i>
          <div class="desc">
            <h3><?php echo $settings['i_title2'] ?></h3>
            <p><?php echo $settings['i_description2'] ?></p>
          </div>
        </div>
        <div class="featured-inner">
          <i class="sl-icon-layers"></i>
          <div class="desc">
            <h3><?php echo $settings['i_title3'] ?></h3>
            <p><?php echo $settings['i_description3'] ?></p>
          </div>
        </div>
      </div>
    </div>


    <?php

  }

}
