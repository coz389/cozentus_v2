<?php
class Admin extends MX_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('admin_model');
        $this->load->library('upload');

        if (!$this->session->userdata('AdminLogin')) {
            return redirect(base_url('admin/login'));
        }
    }
    public function index()
    {
        redirect(base_url('admin/blogslist'));
        $this->load->view('common/header');
        $this->load->view('index');
        $this->load->view('common/footer');
    }
    public function blogslist()
    {
        $data['list'] = $this->admin_model->getblogs();
        $this->load->view('common/header', $data);
        $this->load->view('blogs-list');
        $this->load->view('common/footer');
    }
    public function testimonialslist()
    {
        $data['list'] = $this->admin_model->gettestimonial();
        $this->load->view('common/header', $data);
        $this->load->view('testimonials-list');
        $this->load->view('common/footer');
    }
    public function newsletteremails()
    {
        $data['list'] = $this->db->get('newsletter_master')->result_array();
        $this->load->view('common/header', $data);
        $this->load->view('newsletter-list');
        $this->load->view('common/footer');
    }
    public function teammemberslist()
    {
        $data['list'] = $this->admin_model->getteammembers();
        $this->load->view('common/header', $data);
        $this->load->view('team-list');
        $this->load->view('common/footer');
    }
    public function industrylist()
    {
        $data['list'] = $this->admin_model->getindustries();
        $this->load->view('common/header', $data);
        $this->load->view('industry-list');
        $this->load->view('common/footer');
    }
    public function clientlist()
    {
        $data['list'] = $this->admin_model->getclients();
        $this->load->view('common/header', $data);
        $this->load->view('client-list');
        $this->load->view('common/footer');
    }
    public function homebannerlist()
    {
        $data['list'] = $this->admin_model->gethomebanners();
        $this->load->view('common/header', $data);
        $this->load->view('homebanner-list');
        $this->load->view('common/footer');
    }
    public function homesliderlist()
    {
        $data['list'] = $this->admin_model->gethomesliders();
        $this->load->view('common/header', $data);
        $this->load->view('homeslider-list');
        $this->load->view('common/footer');
    }
    public function homewhyconlist()
    {
        $data['list'] = $this->admin_model->gethomewhycon();
        $this->load->view('common/header', $data);
        $this->load->view('homewhycoz-list');
        $this->load->view('common/footer');
    }
    public function logolist()
    {
        $data['list'] = $this->admin_model->getgallery_logos(1);
        $this->load->view('common/header', $data);
        $this->load->view('logo-list');
        $this->load->view('common/footer');
    }
    public function gallerylist()
    {
        $data['list'] = $this->admin_model->getgallery_logos(2);
        $this->load->view('common/header', $data);
        $this->load->view('gallery-list');
        $this->load->view('common/footer');
    }
    public function header_footer_data()
    {
        $data['pages'] = $this->admin_model->getpageslist();
        $this->load->view('common/header', $data);
        $this->load->view('seo_text');
        $this->load->view('common/footer');
    }
    public function web_setting()
    {
        $data['rows'] = $this->admin_model->getwebdetails();
        // echo '<pre>';
        // print_r($data);
        // die();
        $this->load->view('common/header', $data);
        $this->load->view('web_setting');
        $this->load->view('common/footer');
    }
    public function imageslist()
    {
        $this->load->view('common/header');
        $this->load->view('images-list');
        $this->load->view('common/footer');
    }
    public function videolist()
    {
        $qry = $this->db->get('video_master');
        $data['list'] = $qry->result_array();
        $this->load->view('common/header', $data);
        $this->load->view('video-list');
        $this->load->view('common/footer');
    }
    public function subscriberlist()
    {
        $qry = $this->db->order_by('id', 'DESC')->get('subscribe_master');
        $data['list'] = $qry->result_array();
        $this->load->view('common/header', $data);
        $this->load->view('newsletter-list');
        $this->load->view('common/footer');
    }
    public function subscriber_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('subscribe_master', ['id' => $id]);
        echo json_encode(['status' => true]);
    }
    public function subscriberexportcsv()
    {
        //$data['list'] = $this->admin_model->getjobenquiry();
        //csv file name
        $filename = 'sub_scribere_list_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data
        $usersData = $this->admin_model->getsubscriber();

        // file creation
        $file = fopen('php://output', 'w');

        $header = array("srno", "Email", 'Date');
        fputcsv($file, $header);

        foreach ($usersData as $key => $line) {
            fputcsv($file, $line);
        }

        fclose($file);
        exit;
    }
    public function jobenquirylist()
    {
        $data['list'] = $this->admin_model->getjobenquiry();
        $this->load->view('common/header', $data);
        $this->load->view('jobenquiry');
        $this->load->view('common/footer');
    }
    public function jobenquiryexportcsv()
    {
        //$data['list'] = $this->admin_model->getjobenquiry();
        //csv file name
        $filename = 'job_enquir_list_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data
        $usersData = $this->admin_model->getjobenquiry();

        // file creation
        $file = fopen('php://output', 'w');

        $header = array("srno", "Name", "Email", "Mobile", "Applied For", "Resume", 'Date');
        fputcsv($file, $header);

        foreach ($usersData as $key => $line) {
            fputcsv($file, $line);
        }

        fclose($file);
        exit;
    }
    public function addblog()
    {
        $data['authors'] = $this->admin_model->getauthors();
        $data['services'] = $this->admin_model->getservices();
        $this->load->view('common/header', $data);
        $this->load->view('add-blog');
        $this->load->view('common/footer');
    }
    public function addtestimonial()
    {
        $this->load->view('common/header');
        $this->load->view('add-testimonial');
        $this->load->view('common/footer');
    }
    public function addteammember()
    {
        $this->load->view('common/header');
        $this->load->view('add-team');
        $this->load->view('common/footer');
    }
    public function addindustry()
    {
        $this->load->view('common/header');
        $this->load->view('add-industry');
        $this->load->view('common/footer');
    }
    public function addclient()
    {
        $data['category'] = $this->admin_model->getcategory(3);
        $this->load->view('common/header', $data);
        $this->load->view('add-client');
        $this->load->view('common/footer');
    }
    public function addhomebanner()
    {
        $this->load->view('common/header');
        $this->load->view('add-home-banner');
        $this->load->view('common/footer');
    }
    public function addwhycoz()
    {
        $data['services'] = $this->admin_model->servicesofferlist();
        $this->load->view('common/header');
        $this->load->view('add-why-coz', $data);
        $this->load->view('common/footer');
    }
    public function addhomeslider()
    {
        $this->load->view('common/header');
        $this->load->view('add-home-slider');
        $this->load->view('common/footer');
    }
    public function edittestimonial($id)
    {
        if (empty($id))
            redirect(base_url('testimonialslist'));
        $data = $this->admin_model->gettestimonialbyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-testimonial');
        $this->load->view('common/footer');
    }
    public function addteam()
    {
        $this->load->view('common/header');
        $this->load->view('add-testimonial');
        $this->load->view('common/footer');
    }
    public function addauthor()
    {
        $this->load->view('common/header');
        $this->load->view('add-author');
        $this->load->view('common/footer');
    }
    public function editauthor($id)
    {
        $data = $this->admin_model->getauthorbyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-author');
        $this->load->view('common/footer');
    }
    public function editteam($id)
    {
        if (empty($id))
            redirect(base_url('teammemberslist'));
        $data = $this->admin_model->getteambyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-team');
        $this->load->view('common/footer');
    }
    public function editindustry($id)
    {
        if (empty($id))
            redirect(base_url('industrylist'));
        $data = $this->admin_model->getindustrybyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-industry');
        $this->load->view('common/footer');
    }
    public function editclient($id)
    {
        if (empty($id))
            redirect(base_url('clientlist'));
        $data = $this->admin_model->getclientbyid($id);
        $data['category'] = $this->admin_model->getcategory(3);
        $this->load->view('common/header', $data);
        $this->load->view('edit-client');
        $this->load->view('common/footer');
    }
    public function edithome($id)
    {
        $data = $this->admin_model->getpage(['id' => $id]);
        //$data['authors'] = $this->admin_model->getauthors();
        //$data['services'] = $this->admin_model->getservices();

        $this->load->view('common/header', $data);
        $this->load->view('edit-page');
        $this->load->view('common/footer');
    }
    public function edithomebanner($id)
    {
        if (empty($id))
            redirect(base_url('homebannerlist'));
        $data = $this->admin_model->gethomebannerbyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-home-banner');
        $this->load->view('common/footer');
    }
    public function editwhycoz($id)
    {
        if (empty($id))
            redirect(base_url('homewhyconlist'));
        $data = $this->admin_model->getwhycozbyid($id);
        $data['services'] = $this->admin_model->servicesofferlist();
        $this->load->view('common/header', $data);
        $this->load->view('edit-why-coz');
        $this->load->view('common/footer');
    }
    public function edithomeslider($id)
    {
        if (empty($id))
            redirect(base_url('homebannerlist'));
        $data = $this->admin_model->gethomesliderbyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-home-slider');
        $this->load->view('common/footer');
    }
    public function edithcta($id)
    {
        if (empty($id))
            redirect(base_url('homebannerlist'));
        $data = $this->admin_model->getctabyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-home-cta');
        $this->load->view('common/footer');
    }

    public function industries($id)
    {
        if (empty($id))
            redirect(base_url('admin/blogslist'));
        $data = $this->admin_model->gethomeindustriesbyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-home-Industries');
        $this->load->view('common/footer');
    }
    public function innovation($id)
    {
        if (empty($id))
            redirect(base_url('admin/blogslist'));
        $data = $this->admin_model->gethomeinnovationbyid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-home-innovation');
        $this->load->view('common/footer');
    }
    public function oursignificant($id)
    {
        if (empty($id))
            redirect(base_url('admin/blogslist'));
        $data = $this->admin_model->gethomeoursignificant($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit-home-oursigni');
        $this->load->view('common/footer');
    }
    public function addservice()
    {
        $data['pserv'] = $this->admin_model->getparentserviceslist();
        $this->load->view('common/header', $data);
        $this->load->view('add-service');
        $this->load->view('common/footer');
    }
    public function addparentservice()
    {
        $data['clients'] = $this->admin_model->getclients();
        $this->load->view('common/header', $data);
        $this->load->view('add-parent-service');
        $this->load->view('common/footer');
    }
    public function editparentservice($id)
    {
        $data = $this->admin_model->getparentservicebyid(['id' => $id]);
        $data['clients'] = $this->admin_model->getclients();
        $this->load->view('common/header', $data);
        $this->load->view('edit-parent-service');
        $this->load->view('common/footer');
    }
    public function addjob()
    {
        $this->load->view('common/header');
        $this->load->view('add-job');
        $this->load->view('common/footer');
    }
    public function editjob($id = 0)
    {
        $data = $this->admin_model->getjobbyid(['id' => $id]);
        $this->load->view('common/header', $data);
        $this->load->view('edit-job');
        $this->load->view('common/footer');
    }

    public function editservice($id)
    {
        $data = $this->admin_model->getservicebyid(['id' => $id]);
        $data['pservArr'] = $this->admin_model->getparentserviceslist();
        $this->load->view('common/header', $data);
        $this->load->view('edit-service');
        $this->load->view('common/footer');
    }
    public function industriesedit($id)
    {
        $data = $this->admin_model->getservicebyid(['id' => $id]);
        $data['pservArr'] = $this->admin_model->getparentserviceslist();
        $this->load->view('common/header', $data);
        $this->load->view('edit-industries-cms');
        $this->load->view('common/footer');
    }
    public function editblog($id)
    {
        $data = $this->admin_model->getblog(['id' => $id]);
        $data['authors'] = $this->admin_model->getauthors();
        $data['services'] = $this->admin_model->getservices();
        $this->load->view('common/header', $data);
        $this->load->view('edit-blog');
        $this->load->view('common/footer');
    }
    public function categorylist($page = false)
    {
        $data['page'] = $page;
        $data['list'] = $this->admin_model->getcategory($page);
        $this->load->view('common/header', $data);
        $this->load->view('category');
        $this->load->view('common/footer');
    }
    public function counterslist()
    {
        $data['list'] = $this->admin_model->getcounters();
        $this->load->view('common/header', $data);
        $this->load->view('counters');
        $this->load->view('common/footer');
    }
    public function jobslist()
    {
        $data['list'] = $this->admin_model->getjobs();
        $this->load->view('common/header', $data);
        $this->load->view('jobs-list');
        $this->load->view('common/footer');
    }
    public function contactslist()
    {
        $data['list'] = $this->admin_model->getcontactenquiry('ctform');
        $this->load->view('common/header', $data);
        $this->load->view('contact-list');
        $this->load->view('common/footer');
    }
    public function ftoolcontactslist()
    {
        $data['list'] = $this->admin_model->getcontactenquiry('ftool');
        $this->load->view('common/header', $data);
        $this->load->view('financetool-contact');
        $this->load->view('common/footer');
    }
    public function parentservicelist()
    {
        $data['list'] = $this->admin_model->getparentservice();
        $this->load->view('common/header', $data);
        $this->load->view('parentservicelist');
        $this->load->view('common/footer');
    }
    public function servicelist()
    {
        $data['list'] = $this->admin_model->getservice2();
        $this->load->view('common/header', $data);
        $this->load->view('servicelist');
        $this->load->view('common/footer');
    }
    public function authorlist()
    {
        $data['list'] = $this->admin_model->getauthors();
        $this->load->view('common/header', $data);
        $this->load->view('author-list');
        $this->load->view('common/footer');
    }
    function addupdateparentservice()
    {
        $card_heading = $this->input->post('card_heading');
        $card_description = $this->input->post('card_description');
        $card_image = $this->input->post('card_image');
        $inner_banner_heading = $this->input->post('inner_banner_heading');
        $inner_banner_description = $this->input->post('inner_banner_description');
        $inner_banner_image = $this->input->post('inner_banner_image');
        $inner_banner_mimage = $this->input->post('inner_banner_mimage');
        $ctabtn = $this->input->post('ctabtn');
        $ctalink = $this->input->post('ctalink');
        $about_heading = $this->input->post('about_heading');
        $about_short_description = $this->input->post('about_short_description');
        $advantage_heading = $this->input->post('advantage_heading');
        $advantage_short_description = $this->input->post('advantage_short_description');
        $advantage_image = $this->input->post('advantage_image');
        $transformation_heading = $this->input->post('transformation_heading');
        $transformation_short_description = $this->input->post('transformation_short_description');
        $transformation_image = $this->input->post('transformation_image');
        $heading_faq = $this->input->post('faq_heading');
        $faqArr = $this->input->post('faq');
        $faq_exist = $this->input->post('faqexist');
        $id = $this->input->post('id');
        $video = $this->input->post('video');
        $tags = $this->input->post('tags');
        $page_header = htmlentities($this->input->post('page_header'));
        $slug = $this->cleanString($this->input->post('slug'));
        $clientid = $this->input->post('clientid');

        $mainctabtn = $this->input->post('mainctabtn');
        $mainctalink = $this->input->post('mainctalink');
        $mainctapdf = $this->pdfupload();


        $focus_json_content_dtArr = [];
        $focus_heading = $this->input->post('focus_heading');
        $focus_json = $this->input->post('focus_json');
        $focus_json_content_exist = $this->input->post('focus_json_exist');
        $tailored_json_content_dtArr = [];
        $tailored_heading = $this->input->post('tailored_heading');
        $tailored_json = $this->input->post('tailored_json');
        $tailored_json_content_exist = $this->input->post('tailored_json_exist');

        //   echo '<pre>';
        //   print_r($focus_json  );
        //   die();


        if (!empty($focus_json_content_exist))
            for ($i = 0; $i <= count($focus_json_content_exist); $i++) {
                if (!empty($focus_json_content_exist[$i]['heading']))
                    $focus_json_content_dtArr[] = [
                        // 'image' => $focus_json_content_exist [$i]['image'], 
                        'heading' => $focus_json_content_exist[$i]['heading'],
                        'description' => $focus_json_content_exist[$i]['description'],
                        'ctalink' => $focus_json_content_exist[$i]['ctalink']
                    ];
            }

        if (!empty($focus_json))
            for ($i = 0; $i <= count($focus_json); $i++) {
                if (!empty($focus_json[$i]['heading'])) {
                    $mdes = str_replace(array("\r\n", "\r", "\n"), ":", $focus_json[$i]['description']);
                    $mdes = rtrim($mdes, ':');
                    $focus_json_content_dtArr[] = [
                        // 'image' => $focus_json_content[$i]['image'], 
                        // 'ctabtn' => $focus_json_content[$i]['ctabtn'], 

                        'heading' => $focus_json[$i]['heading'],
                        'description' => $mdes,
                        'ctalink' => $focus_json[$i]['ctalink']
                    ];
                }
            }




        if (!empty($tailored_json_content_exist))
            for ($i = 0; $i <= count($tailored_json_content_exist); $i++) {
                if (!empty($tailored_json_content_exist[$i]['heading']))
                    $tailored_json_content_dtArr[] = [
                        'image' => $tailored_json_content_exist[$i]['image'],
                        'heading' => $tailored_json_content_exist[$i]['heading'],
                        'description' => $tailored_json_content_exist[$i]['description'],
                        'ctalink' => $tailored_json_content_exist[$i]['ctalink']
                    ];
            }

        if (!empty($tailored_json))
            for ($i = 0; $i <= count($tailored_json); $i++) {
                if (!empty($tailored_json[$i]['heading'])) {
                    $mdes = str_replace(array("\r\n", "\r", "\n"), ":", $tailored_json[$i]['description']);
                    $mdes = rtrim($mdes, ':');
                    $tailored_json_content_dtArr[] = [
                        'image' => $tailored_json[$i]['image'],
                        // 'ctabtn' => $tailored_json_content[$i]['ctabtn'], 

                        'heading' => $tailored_json[$i]['heading'],
                        'description' => $mdes,
                        'ctalink' => $tailored_json[$i]['ctalink']
                    ];
                }
            }

        if (!$mainctapdf) {
            $mainctapdf = $this->input->post('mainctapdf_exist') ?? '';
        }
        if (!empty($clientid)) {
            $clientid = implode(',', $clientid);
        }
        $faq_dtArr = [];
        if (!empty($faq_exist))
            for ($i = 0; $i <= count($faq_exist); $i++) {
                if (!empty($faq_exist[$i]['heading']))
                    $faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
            }
        if (!empty($faqArr))
            for ($i = 0; $i <= count($faqArr); $i++) {
                if (!empty($faqArr[$i]['heading']))
                    $faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
            }
        $video = !empty($video) ? urlencode($video) : "";
        $ctalink = !empty($ctalink) ? urlencode($ctalink) : "";
        $data = [
            'slug' => $slug,
            'card_heading' => $card_heading,
            'card_description' => $card_description,
            'card_image' => $card_image,
            'inner_banner_heading' => $inner_banner_heading,
            'inner_banner_description' => $inner_banner_description,
            'inner_banner_image' => $inner_banner_image,
            'inner_banner_mimage' => $inner_banner_mimage,
            'ctabtn' => $ctabtn,
            'ctalink' => $ctalink,
            'about_heading' => $about_heading,
            'about_short_description' => $about_short_description,
            'advantage_heading' => $advantage_heading,
            'advantage_short_description' => $advantage_short_description,
            'advantage_image' => $advantage_image,
            'advantage_video' => $video,
            'transformation_heading' => $transformation_heading,
            'transformation_short_description' => $transformation_short_description,
            'transformation_image' => $transformation_image,
            'heading_faq' => $heading_faq,
            'card_json_faq' => json_encode($faq_dtArr),
            'focus_heading' => $focus_heading,
            'focus_json' => json_encode($focus_json_content_dtArr),
            'tailored_heading' => $tailored_heading,
            'tailored_json' => json_encode($tailored_json_content_dtArr),
            'page_header' => $page_header,
            'tags' => $tags,
            'clientid' => $clientid,
            'main_cta_btn' => $mainctabtn,
            'main_cta_link' => $mainctalink,
            'main_cta_pdf' => $mainctapdf
        ];
        if (!empty($id)) {
            $this->db->update('parent_service', $data, ['id' => $id]);
            $res['msg'] = '<p class="alert alert-success">Parent Service Updated</p>';
        } else {
            $this->db->insert('parent_service', $data);
            $res['msg'] = '<p class="alert alert-success">Parent Service Added</p>';
        }
        if ($this->db->affected_rows() > 0) {
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-danger">No Change</p>';
            $res['status'] = false;
        }
        //echo $this->db->last_query();
        echo json_encode($res);
        exit;
    }
    function addupdatesubservice()
    {
        //echo json_encode($_POST);exit;
        $card_heading = $this->input->post('card_heading');
        $card_description = $this->input->post('card_description');
        $card_image = $this->input->post('card_image');
        $inner_banner_heading = $this->input->post('inner_banner_heading');
        $inner_banner_description = $this->input->post('inner_banner_description');
        $check_home = $this->input->post('is_home');
        if ($check_home) {
            $is_home = 1;
        } else {
            $is_home = 0;
        }
        $inner_banner_image = $this->input->post('inner_banner_image');
        $inner_banner_mimage = $this->input->post('inner_banner_mimage');
        $ctabtn = $this->input->post('ctabtn');
        $ctalink = $this->input->post('ctalink');
        $about_heading = $this->input->post('about_heading');
        $about_short_description_left = $this->input->post('about_short_description_left');
        $about_short_description_right = $this->input->post('about_short_description_right');
        $about_image = $this->input->post('about_image');
        $industries_heading = $this->input->post('industries_heading');
        $why_heading = $this->input->post('why_heading');
        $industries_short_description_left = $this->input->post('industries_short_description_left');
        $industries_image = $this->input->post('industries_image');
        $advantage_heading = $this->input->post('advantage_heading');
        $advantage_short_description = $this->input->post('advantage_short_description');
        $advantage_image = $this->input->post('advantage_image');
        $buisness_heading = $this->input->post('buisness_heading');
        $buisness_content = $this->input->post('buisness_content');
        $buisness_content_exist = $this->input->post('buisness_content_exist');
        $believe_heading = $this->input->post('believe_heading');
        $believe_point1 = $this->input->post('believe_point1');
        $believe_point1_detail = $this->input->post('believe_point1_detail');
        $believe_point2 = $this->input->post('believe_point2');
        $believe_point2_detail = $this->input->post('believe_point2_detail');
        $believe_point3 = $this->input->post('believe_point3');
        $believe_point3_detail = $this->input->post('believe_point3_detail');
        $believe_point4 = $this->input->post('believe_point4');
        $believe_point4_detail = $this->input->post('believe_point4_detail');
        $believe_pointArr = [
            ['key' => $believe_point1, 'value' => $believe_point1_detail],
            ['key' => $believe_point2, 'value' => $believe_point2_detail],
            ['key' => $believe_point3, 'value' => $believe_point3_detail],
            ['key' => $believe_point4, 'value' => $believe_point4_detail],
        ];
        $mbanners = $this->input->post('mbanners');
        $mbanners_exist = $this->input->post('mbanners_exist');
        $toolbenefits_heading = $this->input->post('toolbenefits_heading');
        $toolbenefits_content = $this->input->post('toolbenefits_content');
        $toolbenefits_content_exist = $this->input->post('toolbenefits_exist');
        $heading_faq = $this->input->post('faq_heading');
        $heading_cardop = $this->input->post('cardsecop_heading');
        $faqArr = $this->input->post('faq');
        $ser_offer_heading = $this->input->post('ser_offer_heading');
        $service_offerArr = $this->input->post('service_offer');
        $faq_exist = $this->input->post('faqexist');
        $cardop = $this->input->post('cardsecop');
        $cardop_exist = $this->input->post('cardsecop_exist');
        $id = $this->input->post('id');
        $tags = $this->input->post('tags');
        $pserv = $this->input->post('pserv');
        $sserv = $this->input->post('sserv') ?? 0;
        $video = $this->input->post('advantage_video');
        $info_heading = $this->input->post('info_heading');
        $info_image = $this->input->post('info_image');
        $page_header = htmlentities($this->input->post('page_header'));
        $slug = $this->cleanString($this->input->post('slug'));
        $priority = $this->cleanString($this->input->post('priority'));

        $mainctabtn = $this->input->post('mainctabtn');
        $mainctalink = $this->input->post('mainctalink');
        $mainctapdf = $this->pdfupload();
        if (!$mainctapdf) {
            $mainctapdf = $this->input->post('mainctapdf_exist') ?? '';
        }
        $buisness_content_dtArr = [];
        $mbanners_dtArr = [];
        $toolbenefits_content_dtArr = [];
        $cardop_dtArr = [];
        $faq_dtArr = [];

        if (!empty($buisness_content_exist))
            for ($i = 0; $i <= count($buisness_content_exist); $i++) {
                if (!empty($buisness_content_exist[$i]['heading']))
                    $buisness_content_dtArr[] = [
                        'image' => $buisness_content_exist[$i]['image'],
                        'tab' => $buisness_content_exist[$i]['tab'],
                        'heading' => $buisness_content_exist[$i]['heading'],
                        'description' => $buisness_content_exist[$i]['description']
                    ];
            }
        if (!empty($buisness_content))
            for ($i = 0; $i <= count($buisness_content); $i++) {
                if (!empty($buisness_content[$i]['heading']))
                    $buisness_content_dtArr[] = [
                        'image' => $buisness_content[$i]['image'],
                        'tab' => $buisness_content[$i]['tab'],
                        'heading' => $buisness_content[$i]['heading'],
                        'description' => $buisness_content[$i]['description']
                    ];
            }

        if (!empty($cardop_exist))
            for ($i = 0; $i <= count($cardop_exist); $i++) {
                if (!empty($cardop_exist[$i]['heading']))
                    $cardop_dtArr[] = ['image' => $cardop_exist[$i]['image'], 'link' => urlencode($cardop_exist[$i]['link']), 'heading' => $cardop_exist[$i]['heading'], 'description' => $cardop_exist[$i]['description']];
            }
        if (!empty($cardop))
            for ($i = 0; $i <= count($cardop); $i++) {
                if (!empty($cardop[$i]['heading']))
                    $cardop_dtArr[] = ['image' => $cardop[$i]['image'], 'link' => urlencode($cardop[$i]['link']), 'heading' => $cardop[$i]['heading'], 'description' => $cardop[$i]['description']];
            }
        if (!empty($mbanners_exist))
            for ($i = 0; $i <= count($mbanners_exist); $i++) {
                if (!empty($mbanners_exist[$i]['heading'])) {
                    $mdes = str_replace(array("\r\n", "\r", "\n"), ":", $mbanners_exist[$i]['description']);
                    $mdes = rtrim($mdes, ':');
                    $mbanners_dtArr[] = ['image' => $mbanners_exist[$i]['image'], 'ctabtn' => $mbanners_exist[$i]['ctabtn'], 'ctalink' => $mbanners_exist[$i]['ctalink'], 'heading' => $mbanners_exist[$i]['heading'], 'description' => $mdes];
                }
            }
        if (!empty($mbanners))
            for ($i = 0; $i <= count($mbanners); $i++) {
                if (!empty($mbanners[$i]['heading'])) {
                    $mdes = str_replace(array("\r\n", "\r", "\n"), ":", $mbanners[$i]['description']);
                    $mdes = rtrim($mdes, ':');
                    $mbanners_dtArr[] = ['image' => $mbanners[$i]['image'], 'ctabtn' => $mbanners[$i]['ctabtn'], 'ctalink' => $mbanners[$i]['ctalink'], 'heading' => $mbanners[$i]['heading'], 'description' => $mdes];
                }
            }
        if (!empty($toolbenefits_content_exist))
            for ($i = 0; $i <= count($toolbenefits_content_exist); $i++) {
                if (!empty($toolbenefits_content_exist[$i]['heading']))
                    $toolbenefits_content_dtArr[] = [
                        'image' => $toolbenefits_content_exist[$i]['image'],
                        'tab' => $toolbenefits_content_exist[$i]['tab'],
                        'heading' => $toolbenefits_content_exist[$i]['heading'],
                        'description' => $toolbenefits_content_exist[$i]['description'],
                        'ctabtn' => $toolbenefits_content_exist[$i]['ctabtn'],
                        'ctalink' => $toolbenefits_content_exist[$i]['ctalink']
                    ];
            }
        if (!empty($toolbenefits_content))
            for ($i = 0; $i <= count($toolbenefits_content); $i++) {
                if (!empty($toolbenefits_content[$i]['heading']))
                    $toolbenefits_content_dtArr[] = [
                        'image' => $toolbenefits_content[$i]['image'],
                        'tab' => $toolbenefits_content[$i]['tab'],
                        'heading' => $toolbenefits_content[$i]['heading'],
                        'description' => $toolbenefits_content[$i]['description'],
                        'ctabtn' => $toolbenefits_content[$i]['ctabtn'],
                        'ctalink' => $toolbenefits_content[$i]['ctalink']
                    ];
            }
        if (!empty($faq_exist))
            for ($i = 0; $i <= count($faq_exist); $i++) {
                if (!empty($faq_exist[$i]['heading']))
                    $faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
            }
        if (!empty($faqArr))
            for ($i = 0; $i <= count($faqArr); $i++) {
                if (!empty($faqArr[$i]['heading']))
                    $faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
            }
        $video = !empty($video) ? urlencode($video) : "";
        $ctalink = !empty($ctalink) ? urlencode($ctalink) : "";


        /*New Section (Section11) */
        $section11_title = $this->input->post('section11_title');
        $section11_description = $this->input->post('section11_description');
        $section11_ctabtn = $this->input->post('section11_ctabtn');
        $section11_ctalink = $this->input->post('section11_ctalink');

        $section11_one_title = $this->input->post('section11_one_title');
        $section11_one_desc = $this->input->post('section11_one_desc');
        $section11_one_img = $this->input->post('section11_one_img');

        $section11_two_title = $this->input->post('section11_two_title');
        $section11_two_desc = $this->input->post('section11_two_desc');
        $section11_two_img = $this->input->post('section11_two_img');

        $section11_three_title = $this->input->post('section11_three_title');
        $section11_three_desc = $this->input->post('section11_three_desc');
        $section11_three_img = $this->input->post('section11_three_img');




        $about_news = $this->input->post('about_new');

        $about_new_arr = [];
        $about_new_exist = $this->input->post('about_new_exist');
        if (!empty($about_new_exist)) {
            for ($i = 0; $i <= count($about_new_exist); $i++) {
                if (!empty($about_new_exist[$i]['about_new_tite'])) {
                    $about_new_arr[] = [
                        'about_new_tite' => $about_new_exist[$i]['about_new_tite'],
                        'about_new_desc' => $about_new_exist[$i]['about_new_desc'],
                        'about_new_icon' => $about_new_exist[$i]['about_new_icon'],
                    ];
                }
            }
        }
        // Merge existing FAQs from question_ans_exist with new $faqs
        if (!empty($about_news) && is_array($about_news)) {
            if (!is_array($about_new_arr)) {
                $about_new_arr = [];
            }
            $about_new_arr = array_merge($about_new_arr, $about_news);
        }
        $about_new_arr = json_encode($about_new_arr);

        $why_heading_desc = $this->input->post('why_heading_desc');

        $section12_title = $this->input->post('section12_title');
        $section12_description = $this->input->post('section12_description');
        $section12_ctabtn = $this->input->post('section12_ctabtn');
        $section12_ctalink = $this->input->post('section12_ctalink');
        $section12_image = $this->input->post('section12_image');
        $section12_mimage = $this->input->post('section12_mimage');
        $section12_image_text = $this->input->post('section12_image_text');
        $section12_quote_title = $this->input->post('section12_quote_title');
        $section12_quote_name = $this->input->post('section12_quote_name');

        $section12_one_title = $this->input->post('section12_one_title');
        $section12_one_desc = $this->input->post('section12_one_desc');
        $section12_one_img = $this->input->post('section12_one_img');

        $section12_two_title = $this->input->post('section12_two_title');
        $section12_two_desc = $this->input->post('section12_two_desc');
        $section12_two_img = $this->input->post('section12_two_img');

        $section12_three_title = $this->input->post('section12_three_title');
        $section12_three_desc = $this->input->post('section12_three_desc');
        $section12_three_img = $this->input->post('section12_three_img');

        $section12_list_json = [];
        $section12_list_json[] = [
            'section12_one_title' => $section12_one_title,
            'section12_one_desc' => $section12_one_desc,
            'section12_one_img' => $section12_one_img,
            'section12_two_title' => $section12_two_title,
            'section12_two_desc' => $section12_two_desc,
            'section12_two_img' => $section12_two_img,
            'section12_three_title' => $section12_three_title,
            'section12_three_desc' => $section12_three_desc,
            'section12_three_img' => $section12_three_img,
        ];

        $section12_list_json = json_encode($section12_list_json);

        $toolbenefits_ctabtn = $this->input->post('toolbenefits_ctabtn');
        $toolbenefits_ctalink = $this->input->post('toolbenefits_ctalink');

        $section13_title = $this->input->post('section13_title');
        $section13_description = $this->input->post('section13_description');
        $section13_ctabtn = $this->input->post('section13_ctabtn');
        $section13_ctalink = $this->input->post('section13_ctalink');

        $section13_list_tite_1 = $this->input->post('section13_list_tite_1');
        $section13_list_desc_1 = $this->input->post('section13_list_desc_1');

        $section13_list_tite_2 = $this->input->post('section13_list_tite_2');
        $section13_list_desc_2 = $this->input->post('section13_list_desc_2');

        $section13_list_tite_3 = $this->input->post('section13_list_tite_3');
        $section13_list_desc_3 = $this->input->post('section13_list_desc_3');

        $section13_list_tite_4 = $this->input->post('section13_list_tite_4');
        $section13_list_desc_4 = $this->input->post('section13_list_desc_4');

        $section13_list_json = [];
        $section13_list_json[] = [
            'section13_list_tite_1' => $section13_list_tite_1,
            'section13_list_desc_1' => $section13_list_desc_1,
            'section13_list_tite_2' => $section13_list_tite_2,
            'section13_list_desc_2' => $section13_list_desc_2,
            'section13_list_tite_3' => $section13_list_tite_3,
            'section13_list_desc_3' => $section13_list_desc_3,
            'section13_list_tite_4' => $section13_list_tite_4,
            'section13_list_desc_4' => $section13_list_desc_4,
        ];

        $section13_list_json = json_encode($section13_list_json);
        $about_ctabtn = $this->input->post('about_ctabtn');
        $about_ctalink = $this->input->post('about_ctalink');

        $data = [
            'pserv' => $pserv,
            'sserv' => $sserv,
            'slug' => $slug,
            'card_heading' => $card_heading,
            'card_description' => $card_description,
            'card_image' => $card_image,
            'is_home' => $is_home,
            'inner_banner_heading' => $inner_banner_heading,
            'inner_banner_description' => $inner_banner_description,
            'inner_banner_image' => $inner_banner_image,
            'inner_banner_mimage' => $inner_banner_mimage,
            'ctabtn' => $ctabtn,
            'ctalink' => $ctalink,
            'why_heading ' => $why_heading,
            'why_heading_desc ' => $why_heading_desc,
            'about_heading' => $about_heading,
            'about_image' => $about_image,
            'about_short_description_left' => $about_short_description_left,
            'about_short_description_right' => $about_short_description_right,
            'about_new_json' => $about_new_arr,
            'industries_heading' => $industries_heading,
            'industries_image' => $industries_image,
            'industries_short_description_left' => $industries_short_description_left,
            'advantage_heading' => $advantage_heading,
            'advantage_short_description' => $advantage_short_description,
            'advantage_image' => $advantage_image,
            'advantage_video' => $video,
            'buisness_heading' => $buisness_heading,
            'buisness_json' => json_encode($buisness_content_dtArr),
            'toolbenefits_heading' => $toolbenefits_heading,
            'toolbenefits_json' => json_encode($toolbenefits_content_dtArr),
            'heading_faq' => $heading_faq,
            'card_json_faq' => json_encode($faq_dtArr),
            'believe_heading' => $believe_heading,
            'believe_json' => json_encode($believe_pointArr),
            'mbanners' => json_encode($mbanners_dtArr),
            'info_heading' => $info_heading,
            'info_image' => $info_image,
            'page_header' => $page_header,
            'tags' => $tags,
            'priority' => $priority,
            'cardsecop' => json_encode($cardop_dtArr),
            'cardsecop_heading' => $heading_cardop,
            'main_cta_btn' => $mainctabtn,
            'main_cta_link' => $mainctalink,
            'main_cta_pdf' => $mainctapdf,
            'section11_title' => htmlentities($section11_title),
            'section11_description' => $section11_description,
            'section11_ctabtn' => $section11_ctabtn,
            'section11_ctalink' => $section11_ctalink,
            'section11_one_title' => $section11_one_title,
            'section11_one_desc' => $section11_one_desc,
            'section11_one_img' => $section11_one_img,
            'section11_two_title' => $section11_two_title,
            'section11_two_desc' => $section11_two_desc,
            'section11_two_img' => $section11_two_img,
            'section11_three_title' => $section11_three_title,
            'section11_three_desc' => $section11_three_desc,
            'section11_three_img' => $section11_three_img,
            'section12_title'   => $section12_title,
            'section12_description'   => $section12_description,
            'section12_ctabtn'   => $section12_ctabtn,
            'section12_ctalink'   => $section12_ctalink,
            'section12_image'   => $section12_image,
            'section12_mimage'   => $section12_mimage,
            'section12_image_text'   => $section12_image_text,
            'section12_quote_title'   => $section12_quote_title,
            'section12_quote_name'   => $section12_quote_name,
            'section12_list_json'   => $section12_list_json,
            'toolbenefits_ctabtn'   => $toolbenefits_ctabtn,
            'toolbenefits_ctalink'  => $toolbenefits_ctalink,
            'section13_title'   => $section13_title,
            'section13_description'   => $section13_description,
            'section13_ctabtn'   => $section13_ctabtn,
            'section13_ctalink'   => $section13_ctalink,
            'section13_list_json'   => $section13_list_json,
            'about_ctabtn'  => $about_ctabtn,
            'about_ctalink'  => $about_ctalink,
        ];
        //echo json_encode($data);exit;
        if (!empty($id)) {
            $this->db->update('sub_service', $data, ['id' => $id]);
            $res['msg'] = '<p class="alert alert-success">Service Updated</p>';
        } else {
            $this->db->insert('sub_service', $data);
            $res['msg'] = '<p class="alert alert-success">Service Added</p>';
        }
        if ($this->db->affected_rows() > 0) {
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-danger">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertlogogallery()
    {
        $type = $this->input->post('type');
        $image = explode(',', $this->input->post('image'));
        foreach ($image as $img) {
            $this->db->insert('gallery_logo_master', ['type' => $type, 'imageid' => $img]);
        }
        echo true;
        exit;
    }
    function insertupdatetestimonial()
    {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $details = $this->input->post('details');
        $image = $this->input->post('image');
        $id = $this->input->post('id');
        $videoupload = $this->videoupload();
        if ($videoupload) {
            $video = $videoupload;
        } else {
            $video = $this->input->post('exist_video');
        }
        $data = array('title' => $title, 'image' => $image, 'detail' => $details, 'description' => $description, 'video' => $video);
        if (!empty($id)) {
            $qry = $this->admin_model->update_testimonial($data, ['id' => $id]);
        } else {
            $qry = $this->admin_model->add_testimonial($data);
        }
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Testimonial Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertupdateteam()
    {
        $title = $this->input->post('title');
        $details = $this->input->post('description');
        $short_description = $this->input->post('short_description');
        $name = $this->input->post('name');
        $link = urlencode($this->input->post('link'));
        $twitter_link = urlencode($this->input->post('twitter_link'));
        $insta_link = urlencode($this->input->post('insta_link'));
        $facebook_link = urlencode($this->input->post('facebook_link'));
        $image = $this->input->post('image');
        $type = $this->input->post('group');

        $orderby = $this->input->post('orderby');
        $id = $this->input->post('id');
        $slug = $this->cleanString($name);
        $data = array(
            'title' => $title,
            'image' => $image,
            'details' => $details,
            'short_description' => $short_description,
            'name' => $name,
            'orderby' => $orderby,
            'link' => $link,
            'twitter_link' => $twitter_link,
            'insta_link' => $insta_link,
            'facebook_link' => $facebook_link,
            'slug' => $slug,
            'type' => $type
        );
        if (!empty($id)) {
            $qry = $this->admin_model->update_teammember($data, ['id' => $id]);
        } else {
            $qry = $this->admin_model->add_teammember($data);
        }
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Team Member Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function addgalleryvideo()
    {
        $link = $this->input->post('link');
        $this->db->insert('video_master', ['video' => urlencode($link)]);
        if ($this->db->affected_rows() > 0) {
            $res['status'] = true;
            $res['msg'] = 'Video added successfully';
        } else {
            $res['status'] = false;
            $res['msg'] = 'Video upload error';
        }
        echo json_encode($res);
        exit;
    }

    function insertupdateindustry()
    {
        $title_home_card = $this->input->post('title_home_card');
        $image_home_card = $this->input->post('image_home_card');
        $heading_banner = $this->input->post('inner_banner_heading');
        $image_banner = $this->input->post('inner_banner_image');
        $heading_about = $this->input->post('about_heading');
        $description_about = $this->input->post('about_short_description');
        $image_about = $this->input->post('about_image');
        $heading_help = $this->input->post('help_heading');
        $helpArr = $this->input->post('help');
        $help_exist = $this->input->post('helpexist');
        $heading_faq = $this->input->post('faq_heading');
        $faqArr = $this->input->post('faq');
        $faq_exist = $this->input->post('faqexist');
        $id = $this->input->post('id');
        $slug = $this->cleanString($title_home_card);
        if (!empty($id)) {
            $checkwhere = ['slug' => $slug, 'id !=' => $id];
        } else {
            $checkwhere = ['slug' => $slug];
        }
        $check = $this->admin_model->checkindustrynameexist($checkwhere);
        if ($check) {
            $res['msg'] = '<p class="alert alert-danger">Industry Already Exist!</p>';
            $res['status'] = false;
            echo json_encode($res);
            exit;
        }
        $help_dtArr = [];
        $faq_dtArr = [];
        for ($i = 0; $i <= count($helpArr); $i++) {
            if (!empty($helpArr[$i]['heading']))
                $help_dtArr[] = ['heading' => $helpArr[$i]['heading'], 'description' => $helpArr[$i]['description'], 'image' => $helpArr[$i]['image']];
        }
        if (!empty($help_exist))
            for ($i = 0; $i <= count($help_exist); $i++) {
                if (!empty($help_exist[$i]['heading']))
                    $help_dtArr[] = ['heading' => $help_exist[$i]['heading'], 'description' => $help_exist[$i]['description'], 'image' => $help_exist[$i]['image']];
            }
        for ($i = 0; $i <= count($faqArr); $i++) {
            if (!empty($faqArr[$i]['heading']))
                $faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
        }
        if (!empty($faq_exist))
            for ($i = 0; $i <= count($faq_exist); $i++) {
                if (!empty($faq_exist[$i]['heading']))
                    $faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
            }
        $data = array('title_home_card' => $title_home_card,  'image_home_card' => $image_home_card, 'heading_banner' => $heading_banner, 'image_banner' => $image_banner, 'heading_about' => $heading_about, 'description_about' => $description_about, 'image_about' => $image_about, 'slug' => $slug, 'heading_help' => $heading_help,  'heading_faq' => $heading_faq, 'card_json_help' => json_encode($help_dtArr), 'card_json_faq' => json_encode($faq_dtArr));
        //echo json_encode($data);exit;
        if (!empty($id)) {
            $result = $this->admin_model->update_industry($data, ['id' => $id]);
        } else {
            $result = $this->admin_model->add_industry($data);
        }
        if ($result) {
            $res['msg'] = '<p class="alert alert-success">Industry Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-danger">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertupdateclient()
    {
        $title = $this->input->post('title');
        //$categoryid = $this->input->post('categoryid');
        $link = urlencode($this->input->post('link'));
        $image = $this->input->post('image');
        $orderby = $this->input->post('orderby');
        $id = $this->input->post('id');
        $data = array('title' => $title, 'image' => $image, 'orderby' => $orderby, 'link' => $link);
        if (!empty($id)) {
            $qry = $this->admin_model->update_client($data, ['id' => $id]);
        } else {
            $qry = $this->admin_model->add_client($data);
        }
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Client Logo Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertupdatehomebanner()
    {
        $title = $this->input->post('title');
        $shortdescription = $this->input->post('shortdescription');
        $video_id = $this->input->post('video_id');
        $image = $this->input->post('image');
        $mimage = $this->input->post('mimage');
        $orderby = $this->input->post('orderby');
        $ctalink = $this->input->post('ctalink');
        $ctabtn = $this->input->post('ctabtn');
        $id = $this->input->post('id');

        $text_alignment = $this->input->post('text_alignment');
        $text_class = "banner-content";
        $btn_class = "text-center";
        if (!empty($text_alignment)) {
            if ($text_alignment == 1) {
                $text_class = "banner-content-left";
                $btn_class = "float:left";
            } else if ($text_alignment == 2) {
                $text_class = "banner-content-right";
                $btn_class = "float:right";
            } else if ($text_alignment == 3) {
                $text_class = "banner-content";
                $btn_class = "text-center";
            }
        }

        $data = array(
            'title' => htmlentities($title),
            'video_id' => $video_id,
            'image' => $image,
            'mob_image' => $mimage,
            'short_description' => $shortdescription,
            'orderby' => $orderby,
            'cta_btn' => $ctabtn,
            'cta_link' => urlencode($ctalink),
            'text_align' => $text_alignment,
            'text_alignment_class' => $text_class,
            'btn_alignment_class' => $btn_class,
        );
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_banner($data, ['id' => $id]);
        } else {
            $qry = $this->admin_model->add_home_banner($data);
        }
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Banner Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertupdatehomeindustries()
    {
        $title = $this->input->post('title');
        $shortdescription = $this->input->post('shortdescription');
        $image = $this->input->post('image');
        $mimage = $this->input->post('mimage');
        $orderby = $this->input->post('orderby');
        $ctalink = $this->input->post('ctalink');
        $ctabtn = $this->input->post('ctabtn');
        $id = $this->input->post('id');
        $data = array('title' => htmlentities($title), 'image' => $image, 'mob_image' => $mimage, 'short_description' => $shortdescription, 'orderby' => $orderby, 'cta_btn' => $ctabtn, 'cta_link' => urlencode($ctalink));
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_industries($data, ['id' => $id]);
        } /*else {
			$qry = $this->admin_model->add_home_banner($data);
		}*/
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Industries Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertupdatehomeinnovation()
    {
        $title = $this->input->post('title');
        $shortdescription = $this->input->post('shortdescription');
        $image = $this->input->post('image');
        $mimage = $this->input->post('mimage');
        $orderby = $this->input->post('orderby');
        $ctalink = $this->input->post('ctalink');
        $ctabtn = $this->input->post('ctabtn');
        $id = $this->input->post('id');
        $data = array('title' => htmlentities($title), 'image' => $image, 'mob_image' => $mimage, 'short_description' => $shortdescription, 'orderby' => $orderby, 'cta_btn' => $ctabtn, 'cta_link' => urlencode($ctalink));
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_innovation($data, ['id' => $id]);
        } /*else {
			$qry = $this->admin_model->add_home_banner($data);
		}*/
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Innovation Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertupdatehomesig()
    {
        $whytitle = $this->input->post('whytitle');
        $title = $this->input->post('title');
        $shortdescription = $this->input->post('shortdescription');
        $image = $this->input->post('image');
        $significant_1 = $this->input->post('significant_1');
        $significant_2 = $this->input->post('significant_2');
        $significant_3 = $this->input->post('significant_3');
        $significant_4 = $this->input->post('significant_4');
        $significant_5 = $this->input->post('significant_5');
        $significant_6 = $this->input->post('significant_6');


        $significant_1_desc = $this->input->post('significant_1_desc');
        $significant_2_desc = $this->input->post('significant_2_desc');
        $significant_3_desc = $this->input->post('significant_3_desc');
        $significant_4_desc = $this->input->post('significant_4_desc');
        $significant_5_desc = $this->input->post('significant_5_desc');
        $significant_6_desc = $this->input->post('significant_6_desc');

        $mimage = $this->input->post('mimage');
        $orderby = $this->input->post('orderby');
        $ctalink = $this->input->post('ctalink');
        $ctabtn = $this->input->post('ctabtn');
        $id = $this->input->post('id');
        $data = array(
            'whytitle' => htmlentities($whytitle),
            'title' => htmlentities($title),
            'significant_1' => htmlentities($significant_1),
            'significant_2' => htmlentities($significant_2),
            'significant_3' => htmlentities($significant_3),
            'significant_4' => htmlentities($significant_4),
            'significant_5' => htmlentities($significant_5),
            'significant_6' => htmlentities($significant_6),
            'significant_1_desc' => htmlentities($significant_1_desc),
            'significant_2_desc' => htmlentities($significant_2_desc),
            'significant_3_desc' => htmlentities($significant_3_desc),
            'significant_4_desc' => htmlentities($significant_4_desc),
            'significant_5_desc' => htmlentities($significant_5_desc),
            'significant_6_desc' => htmlentities($significant_6_desc),
            'image' => $image,
            'mob_image' => $mimage,
            'short_description' => $shortdescription,
            'orderby' => $orderby,
            'cta_btn' => $ctabtn,
            'cta_link' => urlencode($ctalink)
        );
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_oursgni($data, ['id' => $id]);
        } /*else {
			$qry = $this->admin_model->add_home_banner($data);
		}*/
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Our Significant Achievements
			Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function insertupdatewhycon()
    {
        $title = $this->input->post('title');
        $shortdescription = htmlentities($this->input->post('shortdescription'));
        $image = $this->input->post('image');
        //$mimage = $this->input->post('mimage');
        $orderby = $this->input->post('orderby');
        $ctalink = $this->input->post('ctalink');
        //$ctabtn = $this->input->post('ctabtn');
        $serviceid = $this->input->post('serviceid');


        $id = $this->input->post('id');
        $data = array('title' => htmlentities($title), 'image' => $image, 'short_description' => $shortdescription, 'ctalink' => urlencode($ctalink), 'serviceid' => $serviceid, 'orderby' => $orderby);
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_whycoz($data, ['id' => $id]);
        } else {
            $qry = $this->admin_model->add_home_whycoz($data);
        }
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Why Cozentus Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }

    function insertupdatehomeslider()
    {
        $title = $this->input->post('title');
        $shortdescription = $this->input->post('shortdescription');
        $image = $this->input->post('image');
        $mimage = $this->input->post('mimage');
        $orderby = $this->input->post('orderby');
        $ctalink = $this->input->post('ctalink');
        $ctabtn = $this->input->post('ctabtn');

        $ctalink2 = $this->input->post('ctalink2');
        $ctabtn2 = $this->input->post('ctabtn2');
        $ctalink3 = $this->input->post('ctalink3');
        $ctabtn3 = $this->input->post('ctabtn3');
        $ctalink4 = $this->input->post('ctalink4');
        $ctabtn4 = $this->input->post('ctabtn4');
        $ctalink5 = $this->input->post('ctalink5');
        $ctabtn5 = $this->input->post('ctabtn5');

        $id = $this->input->post('id');
        $data = array(
            'title' => htmlentities($title),
            'image' => $image,
            'mob_image' => $mimage,
            'short_description' => $shortdescription,
            'orderby' => $orderby,
            'cta_btn' => $ctabtn,
            'cta_link' => urlencode($ctalink),
            'cta_btn2' => $ctabtn2,
            'cta_link2' => urlencode($ctalink2),
            'cta_btn3' => $ctabtn3,
            'cta_link3' => urlencode($ctalink3),
            'cta_btn4' => $ctabtn4,
            'cta_link4' => urlencode($ctalink4),
            'cta_btn5' => $ctabtn5,
            'cta_link5' => urlencode($ctalink5),
        );
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_slider($data, ['id' => $id]);
        } else {
            $qry = $this->admin_model->add_home_slider($data);
        }
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Slider Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }


    function insertupdatehomecta()
    {
        $title = $this->input->post('title');
        $shortdescription = $this->input->post('shortdescription');
        $image = $this->input->post('image');
        $mimage = $this->input->post('mimage');
        //$orderby = $this->input->post('orderby');
        $ctalink = $this->input->post('ctalink');
        $ctalink2 = $this->input->post('ctalink2');
        $ctabtn = $this->input->post('ctabtn');
        $ctabtn2 = $this->input->post('ctabtn2');
        $id = $this->input->post('id');
        $data = array('title' => htmlentities($title), 'image' => $image, 'mob_image' => $mimage, 'short_description' => $shortdescription, 'cta_btn' => $ctabtn, 'cta_btn2' => $ctabtn2, 'cta_link' => urlencode($ctalink), 'cta_link2' => urlencode($ctalink2));
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_cta($data, ['id' => $id]);
        } else {
            $qry = $this->admin_model->add_home_cta($data);
        }
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home CTA Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    /* 
	
	function insertblog()
	{
		$title = $this->input->post('title');
		$type = $this->input->post('type');
		$tags = $this->input->post('tags');
		$description = $this->input->post('description');
		$author = $this->input->post('author');
		$link = urlencode($this->input->post('link'));
		$date = $this->input->post('date');
		$date = empty($date) ? date('Y-m-d') : date('Y-m-d', strtotime($date));
		$contents = htmlentities($this->input->post('content'));
		$image = $this->input->post('image');
		$slug = $this->cleanString($title);
		$data = array('type' => $type, 'title' => $title, 'tags' => $tags, 'content' => $contents, 'author' => $author, 'posted' => $date, 'image' => $image, 'slug' => $slug, 'description' => $description, 'link' => $link);
		if ($this->admin_model->add_blog($data)) {
			$res['msg'] = '<p class="alert alert-success">Post Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-danger">Error</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	} */


    function insertupdatepage()
    {
        $id = $this->input->post('id');
        $sub_menu_title1 = $this->input->post('sub_menu_title1');
        $sub_menu_title2 = $this->input->post('sub_menu_title2');
        $sub_menu_title3 = $this->input->post('sub_menu_title3');
        $sub_menu_title4 = $this->input->post('sub_menu_title4');
        $title = $this->input->post('title');
        $slug = $this->input->post('slug');
        $tags = $this->input->post('tags');
        $ctype = $this->input->post('ctype');
        $cta_btn = $this->input->post('ctabtn');
        $cta_link = $this->input->post('ctalink');
        $type = $this->input->post('type');
        $description = $this->input->post('description');
        $offerin_heading = $this->input->post('trans_title');
        $offerin_content = $this->input->post('trans_description');
        $author = $this->input->post('author');
        $serviceid = $this->input->post('serviceid');
        $date = $this->input->post('date');
        $date = empty($date) ? date('Y-m-d') : date('Y-m-d', strtotime($date));
        $enddate = $this->input->post('enddate');
        $enddate = empty($enddate) ? date('Y-m-d') : date('Y-m-d', strtotime($enddate));
        $contents = htmlentities($this->input->post('content'));
        $image = $this->input->post('image');
        $thumbnail = $this->input->post('thumbnail');
        $slug = $this->cleanString($slug);
        $page_header = htmlentities($this->input->post('page_header'));
        $downloadfile = $this->pdfupload();
        if (!$downloadfile) {
            $downloadfile = $this->input->post('download_exist') ?? '';
        }
        $data = array(
            'sub_menu_title1' => $sub_menu_title1,
            'sub_menu_title2' => $sub_menu_title2,
            'sub_menu_title3' => $sub_menu_title3,
            'sub_menu_title4' => $sub_menu_title4,
            'title' => $title,
            'tags' => $tags,
            'offerin_heading' => $offerin_heading,
            'offerin_content' => $offerin_content,
            'content' => $contents,
            'posted' => $date,
            'page_header' => $page_header,
            'image' => $image,
            'thumbnail' => $thumbnail,
            'slug' => $slug,
            'cta_btn' => $cta_btn,
            'cta_link' => urlencode($cta_link),
            'description' => $description,
            'end_date' => $enddate,
            'ctype' => $ctype,
            'type' => $type,
            'download' => $downloadfile
        );
        //$cityModel->getLastQuery()->getQuery(); die();

        //echo json_encode($data);exit;
        if (!empty($id)) {
            $this->admin_model->updatepage($data, ['id' => $id]);
            $res['msg'] = '<p class="alert alert-success">Page Updated</p>';
        } else {
            $this->admin_model->add_pages($data);
            $res['msg'] = '<p class="alert alert-success">Post Inserted</p>';
            $res['status'] = true;
        }
        echo json_encode($res);
        exit;
    }

    function insertupdateblog()
    {
        // print_r($_POST);
        // exit;
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $sheading = $this->input->post('sheading');
        $sdecription = $this->input->post('sdecription');
        $slink = $this->input->post('slink');
        if (!empty($slink)) {
            $slink = urlencode($slink);
        }
        $slug = $this->input->post('slug');
        $tags = $this->input->post('tags');
        $ctype = $this->input->post('ctype');
        $type = $this->input->post('type');
        $doc_type = $this->input->post('doc_type');
        $description = $this->input->post('description');
        $botttom_heading = $this->input->post('botttom_heading');

        $author = $this->input->post('author');
        $serviceid = $this->input->post('serviceid');

        $top_left_heading = $this->input->post('top_left_heading');
        $top_right_heading = $this->input->post('top_right_heading');
        $short_description_left = $this->input->post('short_description_left');
        $short_description_right = $this->input->post('short_description_right');
        $toolbenefits_heading = $this->input->post('toolbenefits_heading');
        $toolbenefits_content = $this->input->post('toolbenefits_content');
        $toolbenefits_content_exist = $this->input->post('toolbenefits_exist');
        // $section_4_heading = $this->input->post('section_4_heading');
        // $section_4_content = $this->input->post('section_4_content');
        // $section_4_content_exist = $this->input->post('section_4_exist');

        // $section_3_heading = $this->input->post('section_3_heading');
        // $section_3_content = $this->input->post('section_3_content');
        // $section_3_content_exist = $this->input->post('section_3_exist');


        $section_5_heading = $this->input->post('section_5_heading');
        $section_5_image = $this->input->post('section_5_image');
        $section_5_content = $this->input->post('section_5_content');
        $section_5_content_exist = $this->input->post('section_5_exist');

        $section_2_heading = $this->input->post('section_2_heading');
        $section_2_image = $this->input->post('section_2_image');
        $section_2_json = $this->input->post('section_2_json');

        $section_3_heading = $this->input->post('section_3_heading');
        $section_3_image = $this->input->post('section_3_image');
        $section_3_json = $this->input->post('section_3_json');

        $section_4_heading = $this->input->post('section_4_heading');
        $section_4_image = $this->input->post('section_4_image');
        $section_4_json = $this->input->post('section_4_json');



        $apple_pod = $this->input->post('apple_pod');
        $google_pod = $this->input->post('google_pod');
        $spotify_pod = $this->input->post('spotify_pod');
        $sound_pod = $this->input->post('sound_pod');
        $speaker_name = $this->input->post('speaker_name');


        $is_webinar = 0;
        if ($type == 6) {
            $is_webinar = 1;
        }

        $date = $this->input->post('date');
        $date = empty($date) ? date('Y-m-d') : date('Y-m-d', strtotime($date));
        $enddate = $this->input->post('enddate');
        $enddate = empty($enddate) ? date('Y-m-d') : date('Y-m-d', strtotime($enddate));
        $contents = htmlentities($this->input->post('content'));
        $video = $this->input->post('video');

        $image = $this->input->post('image');
        $thumbnail = $this->input->post('thumbnail');
        $slug = $this->cleanString($slug);
        $page_header = htmlentities($this->input->post('page_header'));
        $downloadfile = $this->pdfupload();
        $toolbenefits_content_dtArr = [];
        $section_3_content_dtArr = [];
        $section_4_content_dtArr = [];


        /*
		if (!empty($section_3_content_exist ))
			for ($i = 0; $i <= count($section_3_content_exist ); $i++) {
				if (!empty(($section_3_content_exist[$i]['description']) ))
				$section_3_content_dtArr[] = [
						// 'image' => $section_3_content_exist [$i]['image'], 
						 'heading' => $section_3_content_exist [$i]['heading'], 'description' => $section_3_content_exist [$i]['description']];
		}

		if (!empty($section_3_content))
		for ($i = 0; $i <= count($section_3_content); $i++) {
			if(!empty(($section_3_content[$i]['description']))) {
				$mdes = str_replace(array("\r\n", "\r", "\n"), ":", $section_3_content[$i]['description']);
				$mdes = rtrim($mdes, ':');
				$section_3_content_dtArr[] = [
					// 'image' => $section_3_content[$i]['image'], 
				// 'ctabtn' => $section_3_content[$i]['ctabtn'], 'ctalink' => $section_3_content[$i]['ctalink'],
				 'heading' => $section_3_content[$i]['heading'], 'description' => $mdes];
			}
		}
		
		if (!empty(	$section_4_content_exist))
		for ($i = 0; $i <= count($toolbenefits_content_exist); $i++) {
			if (!empty($section_4_content_exist[$i]['heading']))
				$section_4_content_dtArr[] = [
					'image' => $section_4_content_exist[$i]['image'],
					'heading' => $section_4_content_exist[$i]['heading'],
					'description' => $section_4_content_exist[$i]['description']
				];
		}
		if (!empty($section_4_content))
			for ($i = 0; $i <= count($section_4_content); $i++) {
				if (!empty($section_4_content[$i]['heading'])) {
					$mdes = str_replace(array("\r\n", "\r", "\n"), ":", $section_4_content[$i]['description']);
					$mdes = rtrim($mdes, ':');
					$section_4_content_dtArr[] = [
						'image' => $section_4_content[$i]['image'],
						// 'ctabtn' => $section_4_content[$i]['ctabtn'], 'ctalink' => $section_4_content[$i]['ctalink'],
						'heading' => $section_4_content[$i]['heading'],
						'description' => $mdes
					];
				}
			}


		if (!empty($section_4_content))
			for ($i = 0; $i <= count($section_4_content); $i++) {
				if (!empty($section_4_content[$i]['heading'])) {
					$mdes = str_replace(array("\r\n", "\r", "\n"), ":", $section_4_content[$i]['description']);
					$mdes = rtrim($mdes, ':');
					$section_4_content_dtArr[] = [
						'image' => $section_4_content[$i]['image'],
						// 'ctabtn' => $section_4_content[$i]['ctabtn'], 'ctalink' => $section_4_content[$i]['ctalink'],
						'heading' => $section_4_content[$i]['heading'],
						'description' => $mdes
					];
				}
			}
		*/


        if (!empty($section_5_content_exist))
            for ($i = 0; $i <= count($section_5_content_exist); $i++) {
                if (!empty($section_5_content_exist[$i]['left_heading'])) {
                    $section_5_left_content_dtArr[] = [
                        'heading' => $section_5_content_exist[$i]['left_heading'],
                        'description' => rtrim($section_5_content_exist[$i]['left_description'])
                    ];
                }

                if (!empty($section_5_content_exist[$i]['right_heading'])) {
                    $section_5_right_content_dtArr[] = [
                        'heading' => $section_5_content_exist[$i]['right_heading'],
                        'description' => rtrim($section_5_content_exist[$i]['right_description'])
                    ];
                }
            }

        if (!empty($section_5_content)) {
            for ($i = 0; $i <= count($section_5_content); $i++) {
                if (!empty($section_5_content[$i]['left_heading'])) {
                    $mdes = str_replace(array("\r\n", "\r", "\n"), ":", $section_5_content[$i]['left_description']);
                    $left_description = rtrim($mdes, ':');
                    $section_5_left_content_dtArr[] = [
                        'heading' => $section_5_content[$i]['left_heading'],
                        'description' => $left_description
                    ];
                }

                if (!empty($section_5_content[$i]['right_heading'])) {
                    $mdes = str_replace(array("\r\n", "\r", "\n"), ":", $section_5_content[$i]['right_description']);
                    $right_description = rtrim($mdes, ':');
                    $section_5_right_content_dtArr[] = [
                        'heading' => $section_5_content[$i]['right_heading'],
                        'description' => $right_description
                    ];
                }
            }
        }

        if (!empty($toolbenefits_content_exist))
            for ($i = 0; $i <= count($toolbenefits_content_exist); $i++) {
                if (!empty($toolbenefits_content_exist[$i]['heading']))
                    $toolbenefits_content_dtArr[] = [
                        'image' => $toolbenefits_content_exist[$i]['image'],
                        'heading' => $toolbenefits_content_exist[$i]['heading'],
                        'description' => $toolbenefits_content_exist[$i]['description']
                    ];
            }

        if (!empty($toolbenefits_content))
            for ($i = 0; $i <= count($toolbenefits_content); $i++) {
                if (!empty($toolbenefits_content[$i]['heading']))
                    $toolbenefits_content_dtArr[] = ['image' => $toolbenefits_content[$i]['image'],  'heading' => $toolbenefits_content[$i]['heading'], 'description' => $toolbenefits_content[$i]['description']];
            }


        // if (!empty($toolbenefits_content))
        // for ($i = 0; $i <= count($toolbenefits_content); $i++) {
        // 	if (!empty($toolbenefits_content[$i]['heading']))
        // 		$toolbenefits_content_dtArr[] = [
        //'image' => $toolbenefits_content[$i]['image'],  'heading' => $toolbenefits_content[$i]['heading'], 'description' => $toolbenefits_content[$i]['description']];
        // }	


        $client_review_heading = $this->input->post('client_review_heading');
        $client_review_desc = $this->input->post('client_review_desc');
        $client_designation = $this->input->post('client_designation');

        $sub_title = $this->input->post('sub_title');

        $new_podcast_heading = $this->input->post('new_podcast_heading');
        $new_podcast_title = $this->input->post('new_podcast_title');
        $new_podcast_desc = $this->input->post('new_podcast_desc');

        if (!$downloadfile) {
            $downloadfile = $this->input->post('download_exist') ?? '';
        }
        $data = array(
            'title' => $title,
            'sheading' => $sheading,
            'sdecription' => $sdecription,
            'slink' => $slink,
            'tags' => $tags,
            'is_webinar' => $is_webinar,
            'doc_type' => $doc_type,
            'video' => $video,
            'apple_pod' => $apple_pod,
            'google_pod' => $google_pod,
            'spotify_pod' => $spotify_pod,
            'sound_pod' => $sound_pod,
            'speaker_name' => $speaker_name,
            'botttom_heading' => $botttom_heading,
            'content' => $contents,
            'author' => $author,
            'posted' => $date,
            'page_header' => $page_header,
            'image' => $image,
            'thumbnail' => $thumbnail,
            'slug' => $slug,
            'description' => $description,
            'end_date' => $enddate,
            'ctype' => $ctype,
            'serviceid' => $serviceid,
            'type' => $type,
            'download' => $downloadfile,
            'top_left_heading ' => $top_left_heading,
            'top_right_heading' => $top_right_heading,
            'short_description_left ' => $short_description_left,
            'short_description_right ' => $short_description_right,
            'toolbenefits_heading' => $toolbenefits_heading,
            'toolbenefits_json' => json_encode($toolbenefits_content_dtArr),
            // 'section_3_heading' => $section_3_heading,
            // 'section_3_json' => json_encode($section_3_content_dtArr),
            // 'section_4_heading' => $section_4_heading,
            // 'section_4_json' => json_encode($section_4_content_dtArr),


            'section_5_image' => $section_5_image,
            'section_5_heading' => $section_5_heading,
            'section_5_left_json' => json_encode($section_5_left_content_dtArr),
            'section_5_right_json' => json_encode($section_5_right_content_dtArr),

            'section_2_image' => $section_2_image,
            'section_2_heading' => $section_2_heading,
            'section_2_json' => $section_2_json, //json_encode($section_2_json),

            'section_3_image' => $section_3_image,
            'section_3_heading' => $section_3_heading,
            'section_3_json' => $section_3_json, //json_encode($section_3_json),

            'section_4_image' => $section_4_image,
            'section_4_heading' => $section_4_heading,
            'section_4_json' => $section_4_json, //json_encode($section_4_json),
            'client_review_heading' => $client_review_heading,
            'client_review_desc' => $client_review_desc,
            'client_designation' => $client_designation,
            'sub_title' => $sub_title,
            'new_podcast_heading' => $new_podcast_heading,
            'new_podcast_title' => $new_podcast_title,
            'new_podcast_desc' => $new_podcast_desc,
        );
        // echo print_r($data);
        // exit;
        if (!empty($id)) {
            $this->admin_model->updateblog($data, ['id' => $id]);
            $res['msg'] = '<p class="alert alert-success">Post Updated</p>';
        } else {
            $this->admin_model->add_blog($data);
            $res['msg'] = '<p class="alert alert-success">Post Inserted</p>';
            $res['status'] = true;
        }
        echo json_encode($res);
        exit;
    }
    function insert_update_category()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $page = $this->input->post('type');
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('category_master', ['name' => $name]);
        } else {
            $this->db->insert('category_master', ['name' => $name, 'type' => $page]);
        }
        echo true;
        exit;
    }
    function insert_update_counter()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('name');
        $count = $this->input->post('count');
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('counter_master', ['title' => $title, 'count' => $count]);
        } else {
            $this->db->insert('counter_master', ['title' => $title, 'count' => $count]);
        }
        echo true;
        exit;
    }
    function insertupdateauthor()
    {
        $id = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        $data['title'] = $this->input->post('title');
        //$data['tags'] = $this->input->post('tags');
        $data['image'] = $this->input->post('image');
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('author_master', $data);
            $res['msg'] = '<p class="alert alert-success">Author Updated</p>';
        } else {
            $this->db->insert('author_master', $data);
            $res['msg'] = '<p class="alert alert-success">Author Added</p>';
            $res['status'] = true;
        }
        echo json_encode($res);
        exit;
    }
    function insert_update_job()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $content = $this->input->post('content');
        $tags = $this->input->post('tags');
        $slug = $this->cleanString($title);
        $data = ['slug' => $slug, 'title' => $title, 'tags' => $tags, 'description' => $description, 'content' => htmlentities($content)];
        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('jobs_master', $data);
        } else {
            $this->db->insert('jobs_master', $data);
        }
        if ($this->db->affected_rows() > 0) {
            $res['msg'] = '<p class="alert alert-success">Job Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    function cleanString($string)
    {
        $string = str_replace(' ', '-', trim($string)); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        return strtolower(preg_replace('/-+/', '-', $string)); // Replaces multiple hyphens with single one.
    }
    function cleanImagename($string)
    {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
        return strtolower(preg_replace('/-+/', '-', $string)); // Replaces multiple hyphens with single one.
    }
    function generateRandomString($length = 4)
    {
        return substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyz', ceil($length / strlen($x)))), 1, $length);
    }
    function blogstatus()
    {
        $id = $this->input->post('id');
        if ($this->input->post('status') == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $data = array('is_active' => $status);
        $where = array('id' => $id);
        $this->admin_model->updateblog($data, $where);
        echo json_encode(true);
        exit;
    }
    function career_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('career_master', ['id' => $id]);
        echo true;
        exit;
    }
    function contact_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('contact_master', ['id' => $id]);
        echo true;
        exit;
    }
    function jobstatus()
    {
        $id = $this->input->post('id');
        if ($this->input->post('status') == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        $data = array('is_active' => $status);
        $where = array('id' => $id);
        $this->db->update('jobs_master', $data, $where);
        echo json_encode(true);
        exit;
    }
    function blog_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('blogs', ['id' => $id]);
        echo true;
        exit;
    }
    function deletetestimonials()
    {
        $id = $this->input->post('id');
        $this->db->delete('testimonials', ['id' => $id]);
        echo true;
        exit;
    }
    function videodelete()
    {
        $id = $this->input->post('id');
        $this->db->delete('video_master', ['id' => $id]);
        echo true;
        exit;
    }
    function deleteclient()
    {
        $id = $this->input->post('id');
        $this->db->delete('client_master', ['id' => $id]);
        echo true;
        exit;
    }
    function deleteteam()
    {
        $id = $this->input->post('id');
        $this->db->delete('team_master', ['id' => $id]);
        echo true;
        exit;
    }
    function deleteauthor()
    {
        $id = $this->input->post('id');
        $this->db->delete('author_master', ['id' => $id]);
        echo true;
        exit;
    }
    function deleteindustry()
    {
        $id = $this->input->post('id');
        $this->db->delete('industry_master', ['id' => $id]);
        echo true;
        exit;
    }
    function deletehomebanner()
    {
        $id = $this->input->post('id');
        $this->db->delete('home_banner_master', ['id' => $id]);
        echo true;
        exit;
    }
    function deletehomewhy()
    {
        $id = $this->input->post('id');
        $this->db->delete('home_why_coz_master', ['id' => $id]);
        echo true;
        exit;
    }
    function deletehomeslider()
    {
        $id = $this->input->post('id');
        $this->db->delete('home_slider_master', ['id' => $id]);
        echo true;
        exit;
    }
    function imagedelete()
    {
        $id = $this->input->post('id');
        $this->db->delete('images_master', ['id' => $id]);
        echo true;
        exit;
    }
    function logo_gallery_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('gallery_logo_master', ['id' => $id]);
        echo true;
        exit;
    }
    function job_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('jobs_master', ['id' => $id]);
        echo true;
        exit;
    }
    function service_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('sub_service', ['id' => $id]);
        echo true;
        exit;
    }
    function parentservice_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('parent_service', ['id' => $id]);
        echo true;
        exit;
    }
    function category_delete()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('category_master', ['is_deleted' => 1]);
        echo true;
        exit;
    }
    function counter_delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('counter_master', ['id' => $id]);
        echo true;
        exit;
    }
    function getheaderfooter()
    {
        $id = $this->input->post('id');
        $data = $this->admin_model->getpageheaderbyid($id);
        $data['header'] = html_entity_decode($data['header']);
        $data['footer'] = html_entity_decode($data['footer']);
        echo json_encode($data);
        exit;
    }
    function headerfooterupdate()
    {
        $id = $this->input->post('id');
        $data['footer'] = htmlentities($this->input->post('footer'));
        $data['header'] = htmlentities($this->input->post('header'));
        $this->db->update('seo_master', $data, ['id' => $id]);
        echo true;
        exit;
    }

    function webmanupdate()
    {

        $data['sliding_description'] = htmlentities($this->input->post('sliding_description'));
        $data['button_label'] = htmlentities($this->input->post('btn_label'));
        $data['button_Link'] = urlencode($this->input->post('btn_link'));
        $this->db->update('web_master', $data, ['id' => 1]);
        echo true;
        exit;
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
    function updateimagetext()
    {
        $id = $this->input->post('id');
        $val = $this->input->post('alt_text');
        $nname = $this->input->post('nname');
        $oname = $this->input->post('oname');
        if ($nname != $oname) {
            $dir =    './uploads/images/';
            rename($dir . $oname, $dir . $nname);
            $data = ['image' => $nname, 'alt_text' => $val];
        } else {
            $data = ['alt_text' => $val];
        }
        $this->db->update('images_master', $data, ['id' => $id]);
        echo true;
        exit;
    }
    function getallimages($name = false)
    {
        if ($name)
            $this->db->like('image', $name);
        $this->db->limit(30);
        $this->db->order_by('id desc');
        $this->db->select('id,image');
        $qry = $this->db->get('images_master');
        if ($qry->num_rows() > 0) {
            echo json_encode($qry->result_array());
            exit;
        }
        echo json_encode([]);
        exit;
    }
    function changeadminpassword()
    {
        $pass = $this->input->post('password');
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $this->db->where(['id' => 1]);
        $this->db->update('admin_master', ['password' => $password]);
        echo true;
        exit;
    }
    function imageupload()
    {
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|svg|webp|mp4';
            $config['encrypt_name'] = FALSE;
            $this->upload->initialize($config);
            $files = $_FILES['image'];
            $_FILES['image']['name'] = $this->cleanImagename($files['name']);
            $_FILES['image']['type'] = $files['type'];
            $_FILES['image']['tmp_name'] = $files['tmp_name'];
            $_FILES['image']['error'] = $files['error'];
            $_FILES['image']['size'] = $files['size'];
            $this->upload->do_upload('image');
            $image_data = $this->upload->data();
            $image = $image_data['file_name'];
            $alt_text = $image_data['raw_name'];
            $this->db->insert('images_master', ['image' => $image, 'alt_text' => $alt_text]);
            echo true;
        }
        exit;
    }
    function clear_all_cache()
    {
        $cache_path = 'application/cache/';
        $handle = opendir($cache_path);
        while (($file = readdir($handle)) !== FALSE) {
            //Leave the directory protection alone
            if ($file != '.htaccess' && $file != 'index.html') {
                @unlink($cache_path . '/' . $file);
            }
        }
        closedir($handle);
    }
    function pdfupload()
    {
        if (!empty($_FILES['file']['name'])) {
            $config['upload_path'] = './uploads/pdf/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;
            $this->upload->initialize($config);
            $files = $_FILES['file'];
            $_FILES['image']['name'] = $this->cleanImagename($files['name']);
            $_FILES['image']['type'] = $files['type'];
            $_FILES['image']['tmp_name'] = $files['tmp_name'];
            $_FILES['image']['error'] = $files['error'];
            $_FILES['image']['size'] = $files['size'];
            $this->upload->do_upload('image');
            $image_data = $this->upload->data();
            $image = $image_data['file_name'];

            return $image;
        }
        return false;
    }
    function videoupload()
    {
        if (!empty($_FILES['file']['name'])) {
            $config['upload_path'] = './uploads/videos/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = FALSE;
            $this->upload->initialize($config);
            $files = $_FILES['file'];
            $_FILES['image']['name'] = $this->cleanImagename($files['name']);
            $_FILES['image']['type'] = $files['type'];
            $_FILES['image']['tmp_name'] = $files['tmp_name'];
            $_FILES['image']['error'] = $files['error'];
            $_FILES['image']['size'] = $files['size'];
            $this->upload->do_upload('image');
            $image_data = $this->upload->data();
            $image = $image_data['file_name'];
            return $image;
        }
        return false;
    }
    function getimageslist()
    {
        $postData = $this->input->post();
        $data = $this->admin_model->getimageslist($postData);
        echo json_encode($data);
        exit;
    }
    function getsubserviceslist()
    {
        $pid = $this->input->post('pid');
        $sid = $this->input->post('sid');
        $data = $this->admin_model->getsubserviceslist($pid, $sid);
        echo json_encode($data);
        exit;
    }
    function markproductfeature()
    {
        $id = $this->input->post('id');
        $qry = $this->db->query("update products set fproduct = (CASE fproduct WHEN 1 THEN 0 ELSE 1 END) where id =$id ");
        if ($qry) {
            echo true;
        } else {
            echo false;
        }
        exit;
    }

    /* function createfield()
	{
		$this->load->dbforge();
		$fields = array(
			'main_cta_btn' => array(
					'type' => 'VARCHAR',
					'constraint' => '100',
					'null' => TRUE,
			),
			'main_cta_link' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'null' => TRUE,
			),
			'main_cta_pdf' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'null' => TRUE,
			),
	);
	$this->dbforge->add_column('sub_service', $fields);
	echo true;
	} */
    /* function checkdatabase()
	{
		$this->load->dbutil();

        $query = $this->db->query("SELECT * FROM parent_service");

        echo $this->dbutil->csv_from_result($query);
	} */

    /** Home Page Section 7 & 8 */
    public function homesection7($id)
    {
        if (empty($id))
            redirect(base_url('admin/blogslist'));
        $data = $this->admin_model->gethomesection7byid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit_home_section7');
        $this->load->view('common/footer');
    }
    function insertupdatehomesection7()
    {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $ctabtn = $this->input->post('ctabtn');
        $ctalink = $this->input->post('ctalink');

        $section_one_title = $this->input->post('section_one_title');
        $section_one_desc = $this->input->post('section_one_desc');
        $section_one_img = $this->input->post('section_one_img');

        $section_two_title = $this->input->post('section_two_title');
        $section_two_desc = $this->input->post('section_two_desc');
        $section_two_img = $this->input->post('section_two_img');

        $section_three_title = $this->input->post('section_three_title');
        $section_three_desc = $this->input->post('section_three_desc');
        $section_three_img = $this->input->post('section_three_img');
        $id = $this->input->post('id');

        $data = array(
            'title' => htmlentities($title),
            'description' => $description,
            'ctabtn' => $ctabtn,
            'ctalink' => $ctalink,
            'section_one_title' => $section_one_title,
            'section_one_desc' => $section_one_desc,
            'section_one_img' => $section_one_img,
            'section_two_title' => $section_two_title,
            'section_two_desc' => $section_two_desc,
            'section_two_img' => $section_two_img,
            'section_three_title' => $section_three_title,
            'section_three_desc' => $section_three_desc,
            'section_three_img' => $section_three_img,
        );
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_section7($data, ['id' => $id]);
        } /*else {
			$qry = $this->admin_model->add_home_banner($data);
		}*/
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Section 7 Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
    public function homesection8($id)
    {
        if (empty($id))
            redirect(base_url('admin/blogslist'));
        $data = $this->admin_model->gethomesection8byid($id);
        $this->load->view('common/header', $data);
        $this->load->view('edit_home_section8');
        $this->load->view('common/footer');
    }
    function insertupdatehomesection8()
    {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $ctabtn = $this->input->post('ctabtn');
        $ctalink = $this->input->post('ctalink');

        $faqs = $this->input->post('faq');
        $id = $this->input->post('id');
        $faq_json_Arr = [];
        $question_ans_exist = $this->input->post('question_ans_exist');

        if (!empty($question_ans_exist)) {
            for ($i = 0; $i <= count($question_ans_exist); $i++) {
                if (!empty($question_ans_exist[$i]['question'])) {
                    $faq_json_Arr[] = [
                        'question' => $question_ans_exist[$i]['question'],
                        'answer' => $question_ans_exist[$i]['answer'],
                    ];
                }
            }
        }
        // Merge existing FAQs from question_ans_exist with new $faqs
        if (!empty($faqs) && is_array($faqs)) {
            if (!is_array($faq_json_Arr)) {
                $faq_json_Arr = [];
            }
            $faq_json_Arr = array_merge($faq_json_Arr, $faqs);
        }
        $faq_json_Arr = json_encode($faq_json_Arr);
        $data = array(
            'title' => htmlentities($title),
            'description' => htmlentities($description),
            'ctabtn' => $ctabtn,
            'ctalink' => $ctalink,
            'question_ans' => $faq_json_Arr,
        );
        if (!empty($id)) {
            $qry = $this->admin_model->update_home_section8($data, ['id' => $id]);
        } /*else {
			$qry = $this->admin_model->add_home_banner($data);
		}*/
        if ($qry) {
            $res['msg'] = '<p class="alert alert-success">Home Section 7 Submitted</p>';
            $res['status'] = true;
        } else {
            $res['msg'] = '<p class="alert alert-warning">No Change</p>';
            $res['status'] = false;
        }
        echo json_encode($res);
        exit;
    }
}
