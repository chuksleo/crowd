<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('settings_model');





	}





	/**
	 * Static Page for Pages  controller.
	 *

	 *this controllers handles all static pages on the site
	 *Contact page
	 */
	public function contact()
        {
		$page = 'contact';
		$seg = $this->uri->total_segments();
		if ( ! file_exists('application/views/pages/'.$page.'.php') || $seg > 2)
		{
                    // Whoops, we don't have a page for that!

			show_404();
		}
	   
		$data['site_description'] = lang('contact_page_description');
		$data['page_title'] = "DONOFUND: Contact ";
		$data['page_name'] = "Contact us";
		$data['settings_content'] = $this->settings_model->get_all_settings();
		$data['settings'] = $data['settings_content'];

		
		$data['categories'] = $this->project_category_model->getCategories($num=10);


		$this->load->view('section/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('section/footer', $data);

        }






	/**
	 * Static Page for Pages  controller.
	 *

	 *this controllers handles all static pages on the site
	 *About page
	 */


	public function how()
        {



		$page = 'how-it-works';
		$seg = $this->uri->total_segments();
		if ( ! file_exists('application/views/pages/'.$page.'.php') || $seg > 2)
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		//$data['site_description'] = lang('about_page_description');
		$data['page_title'] = "DONOFUND: How Donofund works";
		$data['categories'] = $this->project_category_model->getCategories($num=10);
		$this->load->view('section/header', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('section/footer');

        }




	public function faqs()
        {



		$page = 'faqs';
		$seg = $this->uri->total_segments();
		if ( ! file_exists('application/views/pages/'.$page.'.php') || $seg > 2)
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['site_description'] = lang('faqs_page_description');
		$data['site_title'] = lang('faqs_page_title');



		$data['faqs'] = $this->faq_model->get_faq_contents();
		$this->load->view('page_section/header', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('page_section/footer');

        }








}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */