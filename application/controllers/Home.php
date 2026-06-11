<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->config('config');
        $this->load->helper('mailhelper');
    }
    public function index()
    {
        $this->load->library('session');
        $getwebdetails = $this->home_model->getwebdetails();
        $this->session->set_userdata('marquee_txt', $getwebdetails['sliding_description']);
        $this->session->set_userdata('btn_label', $getwebdetails['button_label']);
        $this->session->set_userdata('btn_link', urldecode($getwebdetails['button_Link']));
        $data['head_foot'] = $this->home_model->get_header_footer('home');
        $data['banners'] = $this->home_model->get_home_banners();
        if ($data['banners']) {
            foreach ($data['banners'] as $bn) {
                $data['banners_title'][] = strip_tags(html_entity_decode($bn['title']));
            }
        }
        $data['pghome'] = true;
        $tags1 = $this->home_model->getparentalltags();
        $tags2 = $this->home_model->getsuballtags();
        foreach ($tags1 as $tg) {
            $data['tags'][] = $tg['tags'];
        }
        foreach ($tags2 as $tg) {
            $data['tags'][] = $tg['tags'];
        }
        //echo json_encode($data['tags']);exit;
        $data['pservcont'] = $this->home_model->getparentserviceformenu();
        $data['servicehomecard'] = $this->home_model->getservicehomecard();
        //$data['servicehomecard'] = $this->home_model->getparentservicehomecard();
        $data['page_data'] = $this->home_model->get_home_content();
        $data['industries'] = $this->home_model->get_home_industries();
        $data['innovation'] = $this->home_model->get_home_innovation();
        $data['homesliders'] = $this->home_model->get_home_sliders();
        $data['homewhycoz'] = $this->home_model->get_home_whycoz();
        $data['oursignis'] = $this->home_model->get_home_our_signi();
        $data['homecta'] = $this->home_model->get_home_cta();
        $data['homesection7'] = $this->home_model->get_home_section7();
        $data['homesection8'] = $this->home_model->get_home_section8();
        $data['blogs'] = $this->home_model->getrecblogs(1, 4);
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $this->load->view('common/header', $data);
        $this->load->view('index');
        $this->load->view('common/footer');
    }
    public function index1()
    {
        $this->load->library('session');
        $getwebdetails = $this->home_model->getwebdetails();
        $this->session->set_userdata('marquee_txt', $getwebdetails['sliding_description']);
        $this->session->set_userdata('btn_label', $getwebdetails['button_label']);
        $this->session->set_userdata('btn_link', urldecode($getwebdetails['button_Link']));
        $data['head_foot'] = $this->home_model->get_header_footer('home');
        $data['banners'] = $this->home_model->get_home_banners();
        if ($data['banners']) {
            foreach ($data['banners'] as $bn) {
                $data['banners_title'][] = strip_tags(html_entity_decode($bn['title']));
            }
        }
        $data['pghome'] = true;
        $tags1 = $this->home_model->getparentalltags();
        $tags2 = $this->home_model->getsuballtags();
        foreach ($tags1 as $tg) {
            $data['tags'][] = $tg['tags'];
        }
        foreach ($tags2 as $tg) {
            $data['tags'][] = $tg['tags'];
        }
        //echo json_encode($data['tags']);exit;
        $data['pservcont'] = $this->home_model->getparentserviceformenu();
        $data['servicehomecard'] = $this->home_model->getservicehomecard();
        //$data['servicehomecard'] = $this->home_model->getparentservicehomecard();
        $data['page_data'] = $this->home_model->get_home_content();
        $data['industries'] = $this->home_model->get_home_industries();
        $data['innovation'] = $this->home_model->get_home_innovation();
        $data['homesliders'] = $this->home_model->get_home_sliders();
        $data['homewhycoz'] = $this->home_model->get_home_whycoz();
        $data['oursignis'] = $this->home_model->get_home_our_signi();
        $data['homecta'] = $this->home_model->get_home_cta();
        $data['homesection7'] = $this->home_model->get_home_section7();
        $data['homesection8'] = $this->home_model->get_home_section8();
        $data['blogs'] = $this->home_model->getrecblogs(1, 4);
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $this->load->view('common/header', $data);
        $this->load->view('index2');
        $this->load->view('common/footer');
    }
    public function index2()
    {
        $this->load->library('session');
        $getwebdetails = $this->home_model->getwebdetails();
        $this->session->set_userdata('marquee_txt', $getwebdetails['sliding_description']);
        $this->session->set_userdata('btn_label', $getwebdetails['button_label']);
        $this->session->set_userdata('btn_link', urldecode($getwebdetails['button_Link']));
        $data['head_foot'] = $this->home_model->get_header_footer('home');
        $data['banners'] = $this->home_model->get_home_banners();
        if ($data['banners']) {
            foreach ($data['banners'] as $bn) {
                $data['banners_title'][] = strip_tags(html_entity_decode($bn['title']));
            }
        }
        $data['pghome'] = true;
        $tags1 = $this->home_model->getparentalltags();
        $tags2 = $this->home_model->getsuballtags();
        foreach ($tags1 as $tg) {
            $data['tags'][] = $tg['tags'];
        }
        foreach ($tags2 as $tg) {
            $data['tags'][] = $tg['tags'];
        }
        //echo json_encode($data['tags']);exit;
        $data['pservcont'] = $this->home_model->getparentserviceformenu();
        $data['servicehomecard'] = $this->home_model->getservicehomecard();
        //$data['servicehomecard'] = $this->home_model->getparentservicehomecard();
        $data['page_data'] = $this->home_model->get_home_content();
        $data['industries'] = $this->home_model->get_home_industries();
        $data['innovation'] = $this->home_model->get_home_innovation();
        $data['homesliders'] = $this->home_model->get_home_sliders();
        $data['homewhycoz'] = $this->home_model->get_home_whycoz();
        $data['oursignis'] = $this->home_model->get_home_our_signi();
        $data['homecta'] = $this->home_model->get_home_cta();
        $data['homesection7'] = $this->home_model->get_home_section7();
        $data['homesection8'] = $this->home_model->get_home_section8();
        $data['blogs'] = $this->home_model->getrecblogs(1, 4);
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $this->load->view('common/header', $data);
        $this->load->view('index3');
        $this->load->view('common/footer');
    }
    public function parentservice($id = 0)
    {
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $data['head_foot'] = $this->home_model->get_header_footer('services');
        $data['pserv'] = $this->home_model->getparentservicebyid($id);
        if (!$data['pserv']) {
            //redirect(base_url());
            $this->no_page_found();
        } else {
            if (!empty($data['pserv']['clientid'])) {
                $clientids = explode(',', $data['pserv']['clientid']);
                $data['clients'] = $this->home_model->getclientlogosbyservice($clientids);
            }
            $data['innerservices'] = $this->home_model->getserviceforparentcard($data['pserv']['id']);
            $data['page_data'] = $this->home_model->get_home_content();
            $data['servicehomecard'] = $this->home_model->getservicehomecard();

            if (!empty($data['pserv']['focus_json'])) {
                $focus_array = json_decode($data['pserv']['focus_json'], true);
                $sounique = [];
                if (!empty($focus_array))
                    foreach ($focus_array as $ft) {

                        $sounique[] = ['heading' => $ft['heading'], 'description' => $ft['description'], 'ctalink' => $ft['ctalink']];
                    }
                $data['pserv']['focus_json'] = $sounique;

                $data['focus'] = $data['pserv']['focus_json'];
            }

            if (!empty($data['pserv']['tailored_json'])) {
                $tailored_array = json_decode($data['pserv']['tailored_json'], true);
                $sounique = [];
                if (!empty($tailored_array))
                    foreach ($tailored_array as $ta) {
                        $image = $this->home_model->getimagebyid($ta['image']);
                        if ($image) {
                            $img = $image['image'];
                            $alt = $image['alt_text'];
                        } else {
                            $img = '';
                            $alt = '';
                        }
                        $sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ta['heading'], 'description' => $ta['description'], 'ctalink' => $ta['ctalink']];
                    }
                $data['pserv']['tailored_json'] = $sounique;

                $data['tailored'] = $data['pserv']['tailored_json'];
            }
            //  echo '<pre>';
            //  print_r($data); die();
            $pservieID = $data['pserv']['id'];
            $this->load->view('common/header', $data);
            if ($pservieID == 4) {
                $viewtpl = 'parent-industries';
            } else {
                $viewtpl = 'parent-service';
            }
            $this->load->view($viewtpl);
            $this->load->view('common/footer');
        }
    }

    public function innerservice($parent, $slug, $slug2 = false)
    {
        if (!empty($slug2)) {
            $slug = $slug2;
        }
        $data['head_foot'] = $this->home_model->get_header_footer('services');
        $data['pserv'] = $this->home_model->getinnerservicebyslug($slug);

        if (!$data['pserv']) {
            redirect(base_url());
        }
        if (!empty($data['pserv']['buisness_json'])) {
            $features = json_decode($data['pserv']['buisness_json'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = ['image' => $img, 'alt_text' => $alt, 'tab' => $ft['tab'], 'heading' => $ft['heading'], 'description' => $ft['description']];
                }
            $data['pserv']['buisness_json'] = $sounique;
        }

        if (!empty($data['pserv']['toolbenefits_json'])) {
            $features = json_decode($data['pserv']['toolbenefits_json'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = [
                        'image' => $img,
                        'alt_text' => $alt,
                        'tab' => $ft['tab'],
                        'heading' => $ft['heading'],
                        'description' => $ft['description']
                    ];
                }
            $data['pserv']['toolbenefits_json'] = $sounique;
        }
        if (!empty($data['pserv']['mbanners'])) {
            $features = json_decode($data['pserv']['mbanners'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = [
                        'image' => $img,
                        'alt_text' => $alt,
                        'ctabtn' => $ft['ctabtn'],
                        'ctalink' => $ft['ctalink'],
                        'heading' => $ft['heading'],
                        'description' => $ft['description']
                    ];
                }
            $data['pserv']['mbanners'] = $sounique;
        }
        if (!empty($data['pserv']['cardsecop'])) {
            $features = json_decode($data['pserv']['cardsecop'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = [
                        'image' => $img,
                        'alt_text' => $alt,
                        'link' => $ft['link'],
                        'heading' => $ft['heading'],
                        'description' => $ft['description']
                    ];
                }
            $data['pserv']['cardsecop'] = $sounique;
        }
        $data['innerservices'] = $this->home_model->getserviceforinnerparentcard($data['pserv']['id']);
        $ndustries_imageId = $data['pserv']['industries_image'];
        $data['industryImg'] = $this->home_model->getimagebyid($ndustries_imageId);
        //print_r($data['industryImg']);
        //echo json_encode($data['innerservices']);
        //exit;
        $data['mistakes_reduction'] = $this->db->get_where('cost_saving_config', ['id' => 1])->row();
        $data['average_cost'] = $this->db->get_where('cost_saving_config', ['id' => 2])->row();
        $data['pserv']['servtp'] = 'sub';
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        //echo "id". $data['pserv']['id']; die();

        $data['homewhycoz'] = $this->home_model->get_service_whycoz($data['pserv']['id'],);

        $this->load->view('common/header', $data);
        $pservice = $data['pserv']['pserv'];

        //$data['example_data'] = $this->example_model->get_data_by_id($id);
        if (($pservice == 3)     || $pservice == 0) {
            $this->load->view('inner-service-offers');
        } else if ($pservice == 4) {
            $this->load->view('inner-subservice-industries');
        } else {
            $this->load->view('inner-service');
        }

        $this->load->view('common/footer');
    }

    public function innerindu()
    {
        if (!empty($slug2)) {
            $slug = $slug2;
        }
        $data['head_foot'] = $this->home_model->get_header_footer('services');
        $data['pserv'] = $this->home_model->getinnerservicebyslug('industries');
        if (!$data['pserv']) {
            redirect(base_url());
        }
        if (!empty($data['pserv']['buisness_json'])) {
            $features = json_decode($data['pserv']['buisness_json'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = ['image' => $img, 'alt_text' => $alt, 'tab' => $ft['tab'], 'heading' => $ft['heading'], 'description' => $ft['description']];
                }
            $data['pserv']['buisness_json'] = $sounique;
        }
        if (!empty($data['pserv']['toolbenefits_json'])) {
            $features = json_decode($data['pserv']['toolbenefits_json'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = ['image' => $img, 'alt_text' => $alt, 'tab' => $ft['tab'], 'heading' => $ft['heading'], 'description' => $ft['description']];
                }
            $data['pserv']['toolbenefits_json'] = $sounique;
        }
        if (!empty($data['pserv']['mbanners'])) {
            $features = json_decode($data['pserv']['mbanners'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = ['image' => $img, 'alt_text' => $alt, 'ctabtn' => $ft['ctabtn'], 'ctalink' => $ft['ctalink'], 'heading' => $ft['heading'], 'description' => $ft['description']];
                }
            $data['pserv']['mbanners'] = $sounique;
        }
        if (!empty($data['pserv']['cardsecop'])) {
            $features = json_decode($data['pserv']['cardsecop'], true);
            $sounique = [];
            if (!empty($features))
                foreach ($features as $ft) {
                    $image = $this->home_model->getimagebyid($ft['image']);
                    if ($image) {
                        $img = $image['image'];
                        $alt = $image['alt_text'];
                    } else {
                        $img = '';
                        $alt = '';
                    }
                    $sounique[] = ['image' => $img, 'alt_text' => $alt, 'link' => $ft['link'], 'heading' => $ft['heading'], 'description' => $ft['description']];
                }
            $data['pserv']['cardsecop'] = $sounique;
        }
        $data['innerservices'] = $this->home_model->getserviceforinnerparentcard($data['pserv']['id']);
        $ndustries_imageId = $data['pserv']['industries_image'];
        $data['industryImg'] = $this->home_model->getimagebyid($ndustries_imageId);
        //print_r($data['industryImg']);
        //echo json_encode($data['innerservices']);
        //exit;
        $data['mistakes_reduction'] = $this->db->get_where('cost_saving_config', ['id' => 1])->row();
        $data['average_cost'] = $this->db->get_where('cost_saving_config', ['id' => 2])->row();
        $data['pserv']['servtp'] = 'sub';
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $data['homewhycoz'] = $this->home_model->get_service_whycoz($data['pserv']['id'], 8);

        $this->load->view('common/header', $data);
        $pservice = $data['pserv']['pserv'];
        //$data['example_data'] = $this->example_model->get_data_by_id($id);
        if (($pservice == 0) || (empty($pservice))) {
            $this->load->view('inner-service-industries');
        } else {
            $this->load->view('inner-service');
        }

        $this->load->view('common/footer');
    }
    public function innerindustry($slug)
    {
        $data['head_foot'] = $this->home_model->get_header_footer('services');
        $data['pserv'] = $this->home_model->getindustrybyslug($slug);
        if (!empty($data['pserv']['card_json_help'])) {
            $features = json_decode($data['pserv']['card_json_help'], true);
            $sounique = [];
            foreach ($features as $ft) {
                $image = $this->home_model->getimagebyid($ft['image']);
                if ($image) {
                    $img = $image['image'];
                    $alt = $image['alt_text'];
                } else {
                    $img = '';
                    $alt = '';
                }
                $sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
            }
            $data['pserv']['card_json_help'] = $sounique;
        }
        $this->load->view('common/header', $data);
        $this->load->view('industry');
        $this->load->view('common/footer');
    }
    public function servicesbytags()
    {
        $id = $this->input->post('val');
        $tags = explode(',', $id);
        $pageurl = 'solutions/';
        $data = [];
        foreach ($tags as $tg) {
            $services = $this->home_model->getservicesbytags($tg);
            $parentServices = $this->home_model->getparentservicesbytags($tg);
            foreach ($services as &$service) {
                $service['is_parent'] = $pageurl . $service['parent_slug'] . '/' . $service['slug'];
            }
            foreach ($parentServices as &$parentService) {
                $parentService['is_parent'] = $pageurl . $parentService['slug'];
            }
            $data = array_merge($data, $services, $parentServices);
        }
        echo json_encode($data);
        exit;
    }
    public function thankyou()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('thankyou');
        $this->load->view('common/header', $data);
        $this->load->view('thankyou');
        $this->load->view('common/footer');
    }
    public function thankyouforregistering()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('thankyou');
        $this->load->view('common/header', $data);
        $this->load->view('thankyouforregistering');
        $this->load->view('common/footer');
    }
    public function privacy()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('privacy-statement');
        $this->load->view('common/header', $data);
        $this->load->view('privacy-statement');
        $this->load->view('common/footer');
    }

    public function report()
    {
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $this->load->view('common/header', $data);
        $this->load->view('report');

        $this->load->view('common/footer');
    }

    public function cookie_policy()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('about');
        $this->load->view('common/header', $data);
        $this->load->view('cookie-policy');
        $this->load->view('common/footer');
    }
    public function team()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('team');
        $data['manageteam'] = $this->home_model->getteamlist(1);
        $data['leaderteam'] = $this->home_model->getteamlist(2);
        $this->load->view('common/header', $data);
        $this->load->view('team');
        $this->load->view('common/footer');
    }
    public function innerteam($slug)
    {
        $data['head_foot'] = $this->home_model->get_header_footer('innerteam');
        $data['team'] = $this->home_model->getteambyslug($slug);
        $this->load->view('common/header', $data);
        $this->load->view('team-inner');
        $this->load->view('common/footer');
    }
    public function testimonials()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('about');
        $data['testimonials'] = $this->home_model->gettestimonials();
        $this->load->view('common/header', $data);
        $this->load->view('testimonials');
        $this->load->view('common/footer');
    }
    public function mission()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('about');
        // 		$data['testimonials'] = $this->home_model->gettestimonials();
        $this->load->view('common/header', $data);
        $this->load->view('mision');
        $this->load->view('common/footer');
    }
    public function about()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('about');
        $data['servicehomecard'] = $this->home_model->getparentservicehomecard();
        $data['gallery'] = $this->home_model->getimageslist(2);
        $data['videos'] = $this->home_model->getvideoslist();
        $data['newEvents'] = $this->home_model->getreportssbyfilter(2);
        $data['ourteams'] = $this->home_model->getteamlist();
        $this->load->view('common/header', $data);
        $this->load->view('about');
        $this->load->view('common/footer');
    }
    public function about_new()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('about');
        $data['servicehomecard'] = $this->home_model->getparentservicehomecard();
        $data['gallery'] = $this->home_model->getimageslist(2);
        $data['videos'] = $this->home_model->getvideoslist();
        $data['newEvents'] = $this->home_model->getreportssbyfilter(2);
        $data['ourteams'] = $this->home_model->getteamlist();
        $this->load->view('common/header', $data);
        $this->load->view('about_new2');
        $this->load->view('common/footer');
    }
    public function media()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('media');
        $this->load->view('common/header', $data);
        $this->load->view('media-coverage');
        $this->load->view('common/footer');
    }
    public function blogs()
    {
        $tp = $this->uri->segment(1);
        $ctype = 0;
        if ($tp == 'case-studies') {
            $data['title'] = "Case Study";
            $data['type'] = 3;
            $data['site'] = "case-study";
        } else if ($tp == 'news-and-events') {
            $data['title'] = "News And Events";
            $data['type'] = 2;
            $data['site'] = "event";
        } else if ($tp == 'use-cases') {
            $data['title'] = "Use Case";
            $data['type'] = 4;
            $ctype = 1;
            $data['site'] = "use-case";
        } else if ($tp == 'reports') {
            $data['title'] = "Reports";
            $data['type'] = 5;
            $ctype = 1;
            $data['site'] = "reports";
        } else if ($tp == 'webinars') {
            $data['title'] = "Webinars";
            $data['type'] = 6;
            $ctype = 1;
            $data['site'] = "webinar";
        } else if ($tp == 'podcast') {
            $data['title'] = "Podcast";
            $data['type'] = 7;
            $ctype = 1;
            $data['site'] = "podcast";
        } else {
            $data['title'] = "Insights To Transform Your Business";
            $data['type'] = 1;
            $data['site'] = "blog";
        }
        $data['services'] = $this->home_model->getpostservices($data['type'], $ctype);
        $data['authors'] = $this->home_model->getpostauthors($data['type'], $ctype);
        $this->load->view('common/header', $data);
        $this->load->view('blogs');
        $this->load->view('common/footer');
    }


    public function reports()
    {
        $ctype = 0;
        $data['type'] = 5;
        $data['title'] = "Reports";
        $data['type'] = 5;
        $ctype = 1;
        $data['site'] = "report";

        $data['services'] = $this->home_model->getpostservices($data['type'], $ctype);
        //echo json_encode($data['services']);exit;
        $data['authors'] = $this->home_model->getpostauthors($data['type'], $ctype);
        $this->load->view('common/header', $data);
        $this->load->view('reports');
        $this->load->view('common/footer');
    }

    public function blogview($slug)
    {
        $data = $this->home_model->getsingleblog(['slug' => $slug]);
        $data['pserv'] = $this->home_model->getsingleblog(['slug' => $slug]);
        $data['blogs'] = $this->home_model->getrecblogs(1, 3);

        if (empty($data['pserv'])) {
            $this->no_page_found();
        } else {

            $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');

            if (!empty($data['pserv']['section_5_left_json'])) {
                $features = json_decode($data['pserv']['section_5_left_json'], true);
                $sounique = [];
                if (!empty($features))
                    foreach ($features as $ft) {
                        $sounique[] = [
                            'heading' => $ft['heading'],
                            'description' => $ft['description']
                        ];
                    }
                $data['pserv']['section_5_left_json'] = $sounique;

                $features2 = json_decode($data['pserv']['section_5_right_json'], true);
                $sounique2 = [];
                if (!empty($features2))
                    foreach ($features2 as $ft) {
                        $sounique2[] = [
                            'heading' => $ft['heading'],
                            'description' => $ft['description']
                        ];
                    }
                $data['pserv']['section_5_right_json'] = $sounique2;

                $data['section_5_heading'] = $data['pserv']['section_5_heading'];
                $data['section_5_image'] = $data['pserv']['section_5_image'];


                $data['section_5_right'] = $data['pserv']['section_5_right_json'];
                $data['section_5_left'] = $data['pserv']['section_5_left_json'];
            }
            if (!empty($data['pserv']['section_2_json'])) {
                $data['section_2_heading'] = $data['pserv']['section_2_heading'];
                $data['section_2_image'] = $data['pserv']['section_2_image'];
                $data['section_2_json'] = $data['pserv']['section_2_json'];
            }
            if (!empty($data['pserv']['section_3_json'])) {
                $data['section_3_heading'] = $data['pserv']['section_3_heading'];
                $data['section_3_image'] = $data['pserv']['section_3_image'];
                $data['section_3_json'] = $data['pserv']['section_3_json'];
            }
            if (!empty($data['pserv']['section_4_json'])) {
                $data['section_4_heading'] = $data['pserv']['section_4_heading'];
                $data['section_4_image'] = $data['pserv']['section_4_image'];
                $data['section_4_json'] = $data['pserv']['section_4_json'];
            }

            $this->load->view('common/header', $data);
            if ($data['pserv']['is_webinar'] == 1) {
                $this->load->view('webinar');
            } elseif ($data['pserv']['type'] == 3 && $data['pserv']['ctype'] == 0) {
                $this->load->view('use-case-new', $data);
            } elseif ($data['pserv']['type'] == 7 && $data['pserv']['ctype'] == 0) {
                $this->load->view('podcast', $data);
            } else {
                $this->load->view('blog-inner', $data);
            }
            $this->load->view('common/footer');
        }
    }

    public function reportview($slug)
    {
        //$data['blogs'] = $this->home_model->getblogs(1,6);
        $data = $this->home_model->getsingleblog(['slug' => $slug]);
        $data['pserv'] = $this->home_model->getsingleblog(['slug' => $slug]);
        //echo $data['pserv']['is_webinar'];
        if (empty($data)) {
            $this->no_page_found();
        }
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $this->load->view('common/header', $data);
        $this->load->view('report');

        $this->load->view('common/footer');
    }

    public function career()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('career');
        $data['jobs'] = $this->home_model->getjobs();
        $data['gallery'] = $this->home_model->getimageslist(2);
        $data['videos'] = $this->home_model->getvideoslist();
        $this->load->view('common/header', $data);
        $this->load->view('career');
        $this->load->view('common/footer');
    }
    public function awards()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('career');
        $data['awards'] = $this->home_model->getawardslist();
        $this->load->view('common/header', $data);
        $this->load->view('awards');
        $this->load->view('common/footer');
    }
    public function resources()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('career');
        $this->load->view('common/header', $data);
        $this->load->view('resources');
        $this->load->view('common/footer');
    }
    public function clients()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('career');
        $data['clients'] = $this->home_model->getclientslist();
        $this->load->view('common/header', $data);
        $this->load->view('clients');
        $this->load->view('common/footer');
    }
    public function tnc()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('career');
        $this->load->view('common/header', $data);
        $this->load->view('terms-and-conditions');
        $this->load->view('common/footer');
    }
    public function privacy_policy()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('career');
        $this->load->view('common/header', $data);
        $this->load->view('privacy-policy');
        $this->load->view('common/footer');
    }
    public function logistics_glossary()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('glossary-logistics-automation');
        $this->load->view('common/header', $data);
        $this->load->view('logistics-glossary');
        $this->load->view('common/footer');
    }
    public function book_free_consultation()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('book-free-consultation');
        $this->load->view('common/header', $data);
        // $this->load->view('book-free-consultation');
        $this->load->view('book-a-demo-modal');
        $this->load->view('common/footer');
    }
    public function book_a_demo()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('book-a-demo');
        $this->load->view('common/header', $data);
        $this->load->view('book-a-demo');
        $this->load->view('common/footer');
    }

    public function case_studies()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('career');
        $data['data'] = $this->home_model->getblogs(3);
        $data['heading'] = "Case Study";
        $this->load->view('common/header', $data);
        $this->load->view('case-studies');
        $this->load->view('common/footer');
    }
    public function contact()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('contact');
        $data['pservcont'] = $this->home_model->getparentserviceformenu();
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $this->load->view('common/header', $data);
        $this->load->view('contact-us-new');
        $this->load->view('common/footer');
    }
    public function request()
    {
        $data['head_foot'] = $this->home_model->get_header_footer('contact');
        $this->load->view('common/header', $data);
        $this->load->view('request-a-demo');
        $this->load->view('common/footer');
    }
    public function jobview($slug)
    {
        $data = $this->home_model->getsinglejob(['slug' => $slug]);
        if (empty($data)) {
            $this->no_page_found();
        }
        $data['recaptcha_site_key'] = $this->config->item('recaptcha_site_key');
        $this->load->view('common/header', $data);
        $this->load->view('career-inner');
        $this->load->view('common/footer');
    }
    public function serviceview($slug)
    {
        $data = $this->home_model->getservicebyslug(['slug' => $slug]);
        // echo json_encode($data); exit;
        if (empty($data)) {
            redirect(base_url());
        }
        if (!empty($data['features'])) {
            $features = json_decode($data['features'], true);
            $nfeatures = [];
            foreach ($features as $ft) {
                $image = $this->home_model->getimagebyid($ft['image']);
                if ($image) {
                    $img = $image['image'];
                    $alt = $image['alt_text'];
                } else {
                    $img = '';
                    $alt = '';
                }
                $nfeatures[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
            }
            $data['nfeatures'] = $nfeatures;
        }
        if (!empty($data['multiple_points'])) {
            $multiple_points = json_decode($data['multiple_points'], true);
            $nmpoints = [];
            foreach ($multiple_points as $mp) {
                $image = $this->home_model->getimagebyid($mp['image']);
                if ($image) {
                    $img = $image['image'];
                    $alt = $image['alt_text'];
                } else {
                    $img = '';
                    $alt = '';
                }
                $nmpoints[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $mp['heading']];
            }
            $data['nmpoints'] = $nmpoints;
        }
        if (!empty($data['clientel_logo'])) {
            $logo = explode(',', $data['clientel_logo']);
            foreach ($logo as $lg) {
                $clientlogo[] = $this->home_model->getimagebyid($lg);
            }
            $data['clientlogo'] = $clientlogo;
        }
        if ($data['category'] == 0) {
            $data['innerpt'] = $this->home_model->getsubservicesbymainservice($data['id']);
        }
        $data['casestudies'] = $this->home_model->getblogs(3, 3);
        $this->load->view('common/header', $data);
        $this->load->view('service');
        $this->load->view('common/footer');
    }
    public function no_page_found()
    {
        $this->load->view('common/header');
        $this->load->view('page_not_found');
        $this->load->view('common/footer');
    }
    function getcategory()
    {
        $data = $this->home_model->getcategorylist();
        echo json_encode($data);
        exit;
    }
    function getteamlist()
    {
        $data = $this->home_model->getteamlist();
        echo json_encode($data);
        exit;
    }
    function getimagesall()
    {
        $type = $this->input->post('type');
        $data = $this->home_model->getimageslist($type);
        echo json_encode($data);
        exit;
    }
    function getgalleryimages()
    {
        $offset = $this->input->post('offset');
        $data = $this->home_model->getgalleryimages($offset);
        echo json_encode($data);
        exit;
    }
    function getpost()
    {
        $type = $this->input->post('type');
        $data = $this->home_model->getblogs($type, 5);
        if (!empty($data))
            foreach ($data as &$dt) {
                $dt['posted'] = date('M d, Y', strtotime($dt['posted']));
                $dt['link'] = urldecode($dt['link']);
            }
        echo json_encode($data);
        exit;
    }
    function getallpost()
    {
        $type = $this->input->post('type');
        $data = $this->home_model->getblogs($type);
        if (!empty($data))
            foreach ($data as &$dt) {
                $dt['posted'] = date('M d, Y', strtotime($dt['posted']));
                $dt['link'] = urldecode($dt['link']);
            }
        echo json_encode($data);
        exit;
    }
    function gettestimonials()
    {
        $data = $this->home_model->gettestimonials();
        echo json_encode($data);
        exit;
    }
    function getclientlogo()
    {
        $id = $this->input->post('id');
        $data = $this->home_model->getclientlogos($id);
        echo json_encode($data);
        exit;
    }
    function getjobs()
    {
        $search = $this->input->post('search');
        $data = $this->home_model->getjobs($search);
        echo json_encode($data);
        exit;
    }
    function getservices()
    {
        $data = $this->home_model->getservices();
        echo json_encode($data);
        exit;
    }
    function getfeaturedservices()
    {
        $data = $this->home_model->getfeaturedservices();
        echo json_encode($data);
        exit;
    }
    function getservicemenu()
    {
        $menuft = "<ul class='ft-list'>";
        $menu = "<div class='cl c-scroll '><ul>";
        $purl = base_url('solutions/');
        $url = base_url('solutions/');
        $parentm = $this->home_model->getparentserviceformenu();
        if ($parentm) {
            $count = 0;
            $count2 = 0;
            $count3 = 0;
            foreach ($parentm as $pm) {
                $parentslug = $pm['slug'] . '/';
                $active = $count == 0 ? 'active' : '';
                $menuft .= " <li>
			<a href='" . $url . $pm['slug'] . "'>
				" . $pm['name'] . "
			</a></li>";
                $menu .= " <li><a href='" . $purl . $pm['slug'] . "' class='fde " . $active . "' data-slug='" . $url . $pm['slug'] . "' data-target='#d" . $count . "'>
				" . $pm['name'] . "
			</a></li>";
                $count++;
            }
            $menu .= "</ul></div>";
            $menu .= "<div class='cl c-scroll'>";
            foreach ($parentm as $pm) {
                $parentslug = $pm['slug'] . '/';
                $childm = $this->home_model->getsubserviceformenu($pm['id']);
                if ($childm) {
                    $menu .= "<ul id='d" . $count2 . "'>";
                    foreach ($childm as $cm) {
                        $menu .= "	<li>
					<a class='fde2' href='" . $url . $parentslug . $cm['slug'] . " ' data-target='#dp" . $cm['id'] . $count3 . "'>
						" . $cm['name'] . "
					</a>
				</li>";
                    }
                    $menu .= "</ul>";
                }
                $count2++;
            }
            $menu .= "</div>";
            $menu .= "<div class='cl c-scroll'>";
            $parentm = $this->home_model->getsubserviceformenu($pm['id']);
            if ($parentm) {
                foreach ($parentm as $pm) {
                    $childm = $this->home_model->getSubsubserviceformenu($pm['id']);
                    if ($childm) {
                        $menu .= "<ul id='dp" . $pm['id'] . $count3 . "'>";
                        foreach ($childm as $cm) {
                            $menu .= "	<li>
					<a class='' href='" . $url . $parentslug . $pm['slug'] . '/' . $cm['slug'] . " '>
						" . $cm['name'] . "
					</a>
				</li>";
                        }
                        $menu .= "</ul>";
                    }
                }
                $count3++;
            }
            $menu .= "</div>";
        }
        $menuft .= "</ul>";
        $data['desk'] = $menu;
        $data['ft'] = $menuft;
        $data['mob'] = $this->getservicemenuMobile();
        echo json_encode($data);
        exit;
    }
    function getservicemenuMobile()
    {
        $menu = "<a href='javascript:void(0)' data-bs-toggle='collapse' data-bs-target='#df'>Our Offerings</a><ul class='collapse' id='df'>";
        $url = base_url('solutions/');
        $icon = base_url('assets/images/drop.svg');
        $parentm = $this->home_model->getparentserviceformenu();
        if ($parentm) {
            foreach ($parentm as $pm) {
                $parentslug = $pm['slug'] . '/';
                $childm = $this->home_model->getsubserviceformenu($pm['id']);
                $menu .= "<li >";
                $menu .= "<div class='d-flex prt'>";
                $menu .= "<a href='" . $url . $pm['slug'] . "'>";
                $menu .= $pm['name'];
                $menu .= "</a>";
                if ($childm) {
                    $menu .= "<span class='m-drop' data-bs-toggle='collapse' data-bs-target='#dd" . $pm['id'] . "'>
    				<img src='" . $icon . "'>
    			</span>";
                }
                $menu .= "</div>";
                if ($childm) {
                    foreach ($childm as $cm) {
                        $subChildm = $this->home_model->getSubsubserviceformenu($cm['id']);
                        $menu .= "<ul class='collapse' id='dd" . $pm['id'] . "' >";
                        $menu .= "<li>";
                        $menu .= "<div class='d-flex prt'>";
                        $menu .= "<a href='" . $url . $parentslug . $cm['slug'] . "'>";
                        $menu .= $cm['name'];
                        $menu .= "</a>";
                        if ($subChildm) {
                            $menu .= "<span class='m-drop' data-bs-toggle='collapse' data-bs-target='#de" . $cm['id'] . "'>
            				<img src='" . $icon . "'>
            			</span>";
                        }
                        $menu .= "</div>";
                        $menu .= "</li>";
                        if ($subChildm) {
                            foreach ($subChildm as $subcm) {
                                $menu .= "<ul class='collapse' id='de" . $cm['id'] . "'>";
                                $menu .= "<li>";
                                $menu .= "<a href='" . $url . $parentslug . $cm['slug'] . '/' . $subcm['slug'] . "'>";
                                $menu .= $subcm['name'];
                                $menu .= "</a>";
                                $menu .= "</li>";
                                $subsubChildm = $this->home_model->getSubsubserviceformenu($subcm['id']);
                                if ($subsubChildm) {
                                    foreach ($subsubChildm as $subsubcm) {
                                        $menu .= "<li>";
                                        $menu .= "<a href='" . $url . $subsubcm['slug'] . "'>";
                                        $menu .= $subsubcm['name'];
                                        $menu .= "</a>";
                                        $menu .= "</li>";
                                    }
                                }
                                $menu .= "</ul>";
                            }
                        }
                        $menu .= "</ul>";
                    }
                }
                $menu .= "</li>";
            }
        }
        $menu .= "</ul>";
        return $menu;
    }
    function insertcareer()
    {
        $this->load->library('email');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('resume', 'Resume', 'callback_validate_resume');
        if ($this->form_validation->run() == FALSE) {
            $res['status'] = false;
            $res['msg'] = validation_errors();
        } else {
            if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
                $secret_key  = $this->config->item('recaptcha_secret_key');
                $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key .
                    '&response=' . $_POS['g-recaptcha-response']);
                $response_data = json_decode($verify_response);
                if ($response_data->success) {
                    $res['msg'] = 'Valid Captcha';
                    $res['status'] = true;
                } else {
                    $res['msg'] = 'Invalid Captcha';
                    $res['status'] = false;
                }
            } else {
                $res['msg'] = 'Captcha response not provided';
                $res['status'] = false;
            }
            if ($res['status']) {
                $data['name'] = $this->input->post('fname') . ' ' . $this->input->post('lname');
                $data['email'] = $this->input->post('email');
                $data['phone'] = $this->input->post('phone');
                $data['applied_for'] = $this->input->post('position');
                if (!empty($_FILES['resume']['name'])) {
                    $config['upload_path'] = './uploads/resumes/';
                    $config['allowed_types'] = 'pdf|doc|docx';
                    $config['encrypt_name'] = TRUE;
                    $this->upload->initialize($config);
                    $files = $_FILES['resume'];
                    $_FILES['image']['name'] = $files['name'];
                    $_FILES['image']['type'] = $files['type'];
                    $_FILES['image']['tmp_name'] = $files['tmp_name'];
                    $_FILES['image']['error'] = $files['error'];
                    $_FILES['image']['size'] = $files['size'];
                    $this->upload->do_upload('resume');
                    $image_data = $this->upload->data();
                    $data['resume'] = $image_data['file_name'];
                }
                $this->db->insert('career_master', $data);
                if ($this->db->affected_rows() > 0) {
                    $msg = "<table>
					<tr><th>Name : <th><td>" . $data['name'] . "</td></tr>
					<tr><th>Email : <th><td>" . $data['email'] . "</td></tr>
					<tr><th>Phone : <th><td>" . $data['phone'] . "</td></tr>
					</table>";
                    $sub = "New Job Enquiry Received";
                    //$this->sendEmail('career@cozentus.com', $msg, $sub);
                    $this->email->from($data['email'], $data['name']);
                    $this->email->to('mukesh.kumar@infisuite.com');
                    $this->email->subject($sub);
                    $this->email->message($msg);
                    // Attach the file
                    $this->email->attach($config['upload_path'] . $data['resume']);

                    // if ($this->email->send()){
                    $res['status'] = true;
                    $res['msg'] = 'Form Submitted';
                    // } else {
                    // 	$res['status'] = false;
                    // 	$res['msg'] = 'Please try after some time.';
                    // }
                }
            }
        }
        echo json_encode($res);
        exit;
    }
    public function validate_resume($file_name)
    {
        $allowed_types = ['pdf', 'doc', 'docx'];
        $file_ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
        if (!in_array($file_ext, $allowed_types)) {
            $this->form_validation->set_message('validate_resume', 'The {field} field must be a PDF, DOC, or DOCX file.');
            return false;
        }
        return true;
    }

    public function testEmail()
    {
        $msg = "<h2>This is a test email using OAuth 2.0 authentication.</h2>";
        //$message =sendEmailOAuth('sushantakumar.patra@cozentus.com','This is Testing Email',$msg);
        $message = sendEmailOAuth2(
            ['sushantakumar.patra@cozentus.com', 'development.experiment@gmail.com'],
            'This is Testing Email',
            $msg,
            ['sushantakumar.patra@cozentus.com', 'development.experiment@gmail.com']
        );
        //$this->sendMailToAdmin();
    }
    public function sendMailToAdmin()
    {
        $emailData = getEmailConfigs();
        $currentDate = date('Y-m-d');
        $client_secret_expdate = $emailData['client_secret_expdate'];

        $expiryDate = strtotime($emailData['client_secret_expdate']);
        $formatted = date('jS F Y', strtotime($client_secret_expdate . ' +2 days'));
        $now = strtotime(date('Y-m-d'));
        if ($expiryDate <= $now) {
            $from = $emailData['admin_email'];
            $cc =    $emailData['cc_admin_email'];
            $subject = 'Request to Generate New Client Secret for "Coz Web Email" (Expiring' . $emailData['client_secret_expdate'] . ')';

            $message = '<!DOCTYPE html>
				<html>
				<head>
					<meta charset="UTF-8">
					<title>Client Secret Renewal Request</title>
				</head>
				<body style="font-family: Arial, sans-serif; font-size: 14px; line-height: 1.6; color: #333;">

					<p>Dear <strong>IT Team</strong>,</p>

					<p>
						This is a <strong>system-generated email</strong> to request the generation of a new 
						<strong>client secret</strong> for the <em>“Coz Web Email”</em> application, located under the 
						<strong>Azure portal &gt; App registrations &gt; Coz Web Email &gt; Certificates &amp; Secrets</strong> section.
					</p>

					<p>
						The currently active client secret is set to expire on 
						<strong>' . $formatted . '</strong>. As part of proactive maintenance, we intend to 
						update the client secret <strong>2 days in advance</strong> to avoid any service disruption.
					</p>

					<p>
						Once the new secret is generated, please share it securely. The following fields in the 
						<code>email_oauth_config</code> table will be updated:
					</p>

					<ul>
						<li><code>client_secret</code> – updated with the new generated secret</li>
						<li><code>client_secret_expdate</code> – updated with the new expiration date (update 2days beofre date to uninterrupted service)</li>
					</ul>

					<p>
						Kindly confirm once the new client secret is available, or let us know if further details are needed.
					</p>

					<p>Best regards,<br>
					<strong>System Notification – Coz Web Email</strong><br>
					<em>This is an automated email. Please do not reply directly to this message.</em>
					</p>

				</body>
				</html>
			';
            $message = sendEmailOAuth($from, $subject, $message, $cc);
        }
    }


    function insertcontact()
    {

        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key  = $this->config->item('recaptcha_secret_key');
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
            if ($response_data->success) {
                $res['msg'] = 'Valid Captcha';
                $res['status'] = true;
            } else {
                $res['msg'] = 'Invalid Captcha';
                $res['status'] = false;
            }
        } else {
            $res['msg'] = 'Captcha response not provided';
            $res['status'] = false;
        }
        if ($res['status']) {
            // $data['name'] = $this->input->post('fname') . ' ' . $this->input->post('lname');
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['company'] = $this->input->post('organisation');
            $data['employees'] = $this->input->post('employees');
            $service = $this->input->post('service');

            $parent_id = $this->input->post('parent_id');
            $parent_service = "";
            if (!empty($parent_id)) {
                $parent_service = $this->db
                    ->where('id', $this->input->post('parent_id'))
                    ->get('parent_service')
                    ->row()
                    ->card_heading;

                if (!empty($parent_service) && !empty($service)) {
                    $data['interest'] = $parent_service . '/' . $service;
                } elseif (!empty($parent_service)) {
                    $data['interest'] = $parent_service;
                } else {
                    $data['interest'] = $service;
                }
            } else {
                $data['interest'] = $service;
            }

            $path = $this->input->post('path');
            $type = $this->input->post('type');
            $is_mail_sent = true;
            if (!empty($type) && !empty($type)) {
                if (!empty($type) && $type == 3) { //Download
                    $is_mail_sent = false;
                    $data['interest'] = $path;
                } else {
                    $data['interest'] = $path;
                }
            }

            $validate_response = validateEmail($this->input->post('email'), ['xyz'], ['gmail.com', 'gmail.in', 'gmail.net', 'gmail.org', 'gmail.info', 'gmail.edu']);
            if ($validate_response && $validate_response['ok']) {
                // Email is valid
                $this->db->insert('contact_master', $data);
                if ($this->db->affected_rows() > 0) {
                    $msg = "<table>
							<tr><th>Name : <th><td>" . $data['name'] . "</td></tr>
							<tr><th>Email : <th><td>" . $data['email'] . "</td></tr>
							<tr><th>Phone : <th><td>" . $data['phone'] . "</td></tr>
							<tr><th>Area of Interest : <th><td>" . $data['interest'] . "</td></tr>
							<tr><th>Organization : <th><td>" . $data['company'] . "</td></tr>
							<tr><th>Employees : <th><td>" . $data['employees'] . "</td></tr>
						</table>";
                    if (!empty($type) && $type == 6) {
                        $sub = "New Request Received for Webinar";
                    } else {
                        $sub = "New Enquiry Received";
                    }
                    $message = sendEmailOAuth2('gavin@cozentus.com', $sub, $msg, ['david@cozentus.com', 'supplychain@cozentus.com', 'alok.jena@cozentus.com']);
                    $msg2 = "<table>
							<tr><td>Hi, " . $data['name'] . "</td></tr>
							<tr><td>We appreciate your interest in Cozentus. </td></tr>
							<tr><td>We will follow up with you soon!</td></tr>
						</table>";
                    if (!empty($type) && $type != 3) { //except Download
                        $message2 = sendEmailOAuth($data['email'], 'Your Enquiry Request Received', $msg2);
                    }
                    $res['status'] = true;
                    $res['msg'] = '<p class="alert alert-success">Form Submitted</p>';
                } else {
                    $res['status'] = false;
                    $res['msg'] = '<p class="alert alert-warning">Please try after some time.</p>';
                }
            } else {
                $res['status'] = false;
                $res['msg'] = '<p class="alert alert-warning">' . $validate_response["error"] . '</p>';
            }
        }
        echo json_encode($res);
        exit;
    }
    function insertWebinarcontact()
    {
        // Load session library
        $this->load->library('session');
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key  = $this->config->item('recaptcha_secret_key');
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
            if ($response_data->success) {
                $res['msg'] = 'Valid Captcha';
                $res['status'] = true;
            } else {
                $res['msg'] = 'Invalid Captcha';
                $res['status'] = false;
            }
        } else {
            $res['msg'] = 'Captcha response not provided';
            $res['status'] = false;
        }
        if ($res['status']) {
            $data['name'] = $this->input->post('fname') . ' ' . $this->input->post('lname');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            //$data['interest'] = $this->input->post('service');
            $data['company'] = $this->input->post('organisation');
            $data['employees'] = $this->input->post('employees');
            $data['interest'] = $this->input->post('service');
            $this->session->set_userdata('interest', $data['interest']);
            $this->db->insert('contact_master', $data);
            if ($this->db->affected_rows() > 0) {
                $msg = "<table>
			<tr><th>Name : <th><td>" . $data['name'] . "</td></tr>
			<tr><th>Email : <th><td>" . $data['email'] . "</td></tr>
			<tr><th>Phone : <th><td>" . $data['phone'] . "</td></tr>
			<tr><th>Area of Interest : <th><td>" . $data['interest'] . "</td></tr>
			<tr><th>Organization : <th><td>" . $data['company'] . "</td></tr>
			<tr><th>Emplyees : <th><td>" . $data['employees'] . "</td></tr>
			</table>";
                $sub = "New Enquiry Received";
                // $this->sendEmail('supplychain@cozentus.com', $msg, $sub);
                // $this->sendEmail($data['email'], ['topic' => $data['interest'], 'name' => $data['name']], "Your Enquiry Request Received", true);
                $res['status'] = true;
                $res['msg'] = '<p class="alert alert-success">Form Submitted</p>';
            } else {
                $res['status'] = false;
                $res['msg'] = '<p class="alert alert-warning">Please try after some time.</p>';
            }
        }
        //echo '<pre>'
        //print_r($_POST);
        echo json_encode($res);
        exit;
        // Set session data

        // Redirect to a method in another controller
        redirect('another_controller/method_name');
        $this->session->set_userdata('status', 'true');
        if ($res['status'] == true)
            echo "<script>$('#fullPageModal').modal('hide'); </script>";
    }
    function subscribeformsubmit()
    {
        $email = $this->input->post('email');
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $res['status'] = false;
            $res['msg'] = 'Please enter valid testEmail email';
            echo json_encode($res);
            exit;
        }
        // List of restricted domains
        $blocked_domains = [
            "google.com",
            "google.co.in",
            "google.co.uk",
            "google.com.au",
            "google.ca",
            "google.com.sg",
            "yahoo.com",
            "outlook.com",
            "aol.com",
            "icloud.com",
            "zoho.com",
            "protonmail.com",
            "mail.com",
            "gmx.com",
            "yandex.com",
            "gmail.com",
            "gmail.in",
            "gmail.net",
            "gmail.org",
            "gmail.info",
            "gmail.edu"
        ];
        // Extract the domain part from the email
        $email_domain = strtolower(substr(strrchr($email, "@"), 1));

        // Check if the email domain is in the blocked list
        if (in_array($email_domain, $blocked_domains)) {
            $res['status'] = false;
            $res['msg'] = 'Please use a business or corporate email address. Public email domains are not allowed.';
            echo json_encode($res);
            exit;
        }


        $sub = "New Email for Newsletter";
        $msg = "Email : $email";
        $this->db->insert('subscribe_master', ['email' => $email]);
        // $message =sendEmailOAuth('supplychain@cozentus.com',$sub,$msg);
        $message = sendEmailOAuth('sushantakumar.patra@cozentus.com', $sub, $msg);
        //$this->sendEmail("aamir.s.khan.as@gmail.com",$msg, $sub);
        $res['status'] = true;
        $res['msg'] = 'Thank you for subscribing to Cozentus.';
        echo json_encode($res);
        exit;
    }
    function sendEmail($email, $msg, $sub, $emailer = false)
    {
        return true;
        if ($emailer) {
            $msg = $this->load->view('emailer', $msg, true);
        }

        $api_key = getenv('SENDINBLUE_API_KEY') ?: '';
        $api_key = "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";


        // Define the data for the transactional email
        $data = array(
            "sender" => array(
                "name" => "Cozentus",
                "email" => "no-reply@cozentus.com",
            ),
            "to" => array(
                array(
                    "email" => $email
                ),
                array(
                    "email" => "yatri.patvi@dimerse.com"
                )
            ),
            "subject" => $sub,
            "htmlContent" => $msg
        );

        // Convert data to JSON format
        $json_data = json_encode($data);

        // API endpoint
        $api_url = 'https://api.brevo.com/v3/smtp/email';

        // Initialize cURL session
        $ch = curl_init($api_url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'accept: application/json',
            'api-key: ' . $api_key
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute cURL session
        $response = curl_exec($ch);
        //echo $response;
        // Check for errors
        if (curl_errno($ch)) {
            // echo 'cURL error: ' . curl_error($ch);
            return true;
        }

        // Close cURL session
        curl_close($ch);

        // Display the response from the API
        //echo $response;


        return true;

        $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $api_key);

        $apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
            new GuzzleHttp\Client(),
            $config
        );
        $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
        $sendSmtpEmail['subject'] = $sub;
        $sendSmtpEmail['htmlContent'] = $msg;
        $sendSmtpEmail['sender'] = array('name' => 'Cozentus', 'email' => 'no-reply@cozentus.com');
        $sendSmtpEmail['to'] = array(
            array('email' => "aamir.s.khan.as@gmail.com")

        );
        $sendSmtpEmail['replyTo'] = array('email' => 'supplychain@cozentus.com', 'name' => 'Cozentus');
        $sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
        //$sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');

        try {
            $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
            return true;
        } catch (Exception $e) {
            return true;
        }

        return true;
        $mail = new PHPMailer();
        $headers = '';
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port     = 587;
        $mail->Username = "aamir@techmatrick.com";
        $mail->Password = "cHIEd6JrgNCZVbW0";
        $mail->Host     = "smtp-relay.brevo.com";
        $mail->Mailer   = "smtp";
        $mail->SetFrom("no-reply@cozentus.com", "Cozentus");
        $mail->addReplyTo("supplychain@cozentus.com", "Cozentus");
        //$mail->AddAddress("aamir.s.khan.as@gmail.com");
        $mail->AddAddress($email);
        //$mail->AddAddress("supplychain@cozentus.com");
        $mail->Subject = $sub;
        $mail->WordWrap   = 40;
        $mail->MsgHTML($msg);
        $mail->IsHTML(true);
        if (!$mail->Send()) {
            return true;
        }
        return true;
    }
    function getblogsbytype()
    {
        $type = $this->input->post('type');
        $service = $this->input->post('service');
        $author = $this->input->post('author');
        $query = $this->input->post('query');
        $data = $this->home_model->getblogsbyfilter($type, $service, $author, $query);
        echo json_encode($data);
        exit;
    }

    function getreportsbytype()
    {
        $type = 5;

        $data = $this->home_model->getreportssbyfilter($type);
        echo json_encode($data);
        exit;
    }

    function getbjoblist()
    {
        // $type = $this->input->post('type');
        // $service = $this->input->post('service');
        // $author = $this->input->post('author');
        $query = $this->input->post('query');
        $data = $this->home_model->getjobsfilter($query);
        echo json_encode($data);
        exit;
    }
    function redirectblogs()
    {
        redirect(base_url('blogs'));
    }
}
