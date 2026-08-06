<?php defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function check_admin_exists($username, $pass)
    {
        $res = $this->db->get_where('admin_master', array('username' => $username));
        if ($res->num_rows() == 1) {
            $row = $res->row_array();
            $password = $row['password'];
            if (password_Verify($pass, $password)) {
                return true;
            } else {
                return false;
            }
        }
        return FALSE;
    }
    public function check_admin_email_exists($username)
    {
        $res = $this->db->get_where('admin_master', array('username' => $username));
        if ($res->num_rows() == 1) {
            return $res->row_array();
        }
        return FALSE;
    }



    public function save_reset_token($user_id, $token, $expires)
    {
        $data = [
            'reset_token'     => $token,
            'reset_token_exp' => $expires,
            'token_used'      => 0,
        ];

        $this->db->where('id', $user_id)->update('admin_master', $data);
        return $this->db->affected_rows() > 0;
    }

    public function get_user_by_reset_token($token)
    {
        $query = $this->db
            ->where('reset_token', $token)
            ->where('token_used', 0)
            ->where('reset_token_exp >', date('Y-m-d H:i:s'))  // not expired
            ->get('admin_master');

        return $query->num_rows() > 0 ? $query->row_array() : false;
    }
    public function update_admin_password($user_id, $hashed_password)
    {
        // Adjust column name to match your schema (e.g. 'password', 'pass', 'admin_password')
        $this->db->where('id', $user_id)->update('admin_master', [
            'password' => $hashed_password,
        ]);
        return $this->db->affected_rows() > 0;
    }
    public function mark_token_used($user_id)
    {
        $this->db->where('id', $user_id)->update('admin_master', [
            'token_used'      => 1,
            'reset_token'     => null,
            'reset_token_exp' => null,
        ]);
    }
    public function clear_reset_token($user_id)
    {
        $this->db->where('id', $user_id)->update('admin_master', [
            'reset_token'     => null,
            'reset_token_exp' => null,
            'token_used'      => 0,
        ]);
    }








    public function get_login_user_data($username)
    {
        $res = $this->db->get_where('admin_master', array('username' => $username));
        if ($res->num_rows() == 1) {
            $row = $res->row_array();
            return $row;
        }
    }
    public function get_login_user_menu_data($menuid_array)
    {
        $res = $this->db->where_in('menu_id', $menuid_array)->get('menus')->result_array();
        if ($res) {
            return $res;
        }
        return false;
    }
    function getsettings($key)
    {
        $qry = $this->db->get_where('settings', ['skey' => $key]);
        $row = $qry->row_array();
        return $row['svalue'];
    }
    function add_blog($data)
    {
        $this->db->insert('blogs', $data);
        //echo $this->db->last_query();exit;
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_pages($data)
    {
        $this->db->insert('pages', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_testimonial($data)
    {
        $this->db->insert('testimonials', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_testimonial($data, $where)
    {
        $this->db->update('testimonials', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_teammember($data)
    {
        $this->db->insert('team_master', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_teammember($data, $where)
    {
        $this->db->update('team_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_industry($data)
    {
        $this->db->insert('industry_master', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_industry($data, $where)
    {
        $this->db->update('industry_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_client($data)
    {
        $this->db->insert('client_master', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_client($data, $where)
    {
        $this->db->update('client_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_home_banner($data)
    {
        $this->db->insert('home_banner_master', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_home_whycoz($data)
    {
        $this->db->insert('home_why_coz_master', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_home_slider($data)
    {
        $this->db->insert('home_slider_master', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_home_banner($data, $where)
    {
        $this->db->update('home_banner_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_home_industries($data, $where)
    {
        $this->db->update('home_industries_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_home_innovation($data, $where)
    {
        $this->db->update('home_innovation', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_home_oursgni($data, $where)
    {
        $this->db->update('home_our_sgni_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_home_whycoz($data, $where)
    {
        $this->db->update('home_why_coz_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        //echo $this->db->last_query();

        return false;
    }
    function update_home_slider($data, $where)
    {
        $this->db->update('home_slider_master', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_home_cta($data, $where)
    {
        $this->db->update('home_cta', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function add_service($data)
    {
        $this->db->insert('sub_service', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function update_service($data, $where)
    {
        $this->db->where($where);
        $this->db->update('sub_service', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function updateblog($data, $where)
    {
        $this->db->where($where);
        $this->db->update('blogs', $data);
        //echo $this->db->last_query(); 
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function updatepage($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pages', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function getblogs()
    {
        $this->db->order_by('id', 'desc');
        $qry = $this->db->get('blogs');

        return $qry->result_array();
    }
    function getpage($where)
    {
        $this->db->where($where);
        $qry = $this->db->get('pages');
        return $qry->row_array();
    }
    function getvideos()
    {
        $this->db->order_by('id', 'desc');
        $qry = $this->db->get('video_master');

        return $qry->result_array();
    }
    function getauthors()
    {
        $this->db->order_by('id', 'desc');
        $qry = $this->db->get('author_master');

        return $qry->result_array();
    }
    function getblog($where)
    {
        $this->db->where($where);
        $qry = $this->db->get('blogs');
        return $qry->row_array();
    }
    function getauthorbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('author_master');
        return $qry->row_array();
    }
    function gettestimonial()
    {
        $this->db->order_by('t.id', 'desc');
        $this->db->select('t.*,i.image');
        $this->db->from('testimonials t');
        $this->db->join('images_master i', 'i.id = t.image', 'left');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0)
            return $qry->result_array();
        return false;
    }
    function getindustries()
    {
        $this->db->order_by('t.id', 'desc');
        $this->db->select('t.*,i.image');
        $this->db->from('industry_master t');
        $this->db->join('images_master i', 'i.id = t.image_home_card', 'left');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0)
            return $qry->result_array();
        return false;
    }
    function getteammembers()
    {
        $this->db->order_by('t.orderby', 'asc');
        $this->db->select('t.*,i.image');
        $this->db->from('team_master t');
        $this->db->join('images_master i', 'i.id = t.image', 'left');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0)
            return $qry->result_array();
        return false;
    }
    function getclients()
    {
        $this->db->order_by('t.orderby', 'asc');
        $this->db->select('t.*,i.image');
        $this->db->from('client_master t');
        $this->db->join('images_master i', 'i.id = t.image', 'left');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0)
            return $qry->result_array();
        return false;
    }
    function gethomebanners()
    {
        $this->db->order_by('t.orderby', 'asc');
        $this->db->select('t.*,i.image');
        $this->db->from('home_banner_master t');
        $this->db->join('images_master i', 'i.id = t.image', 'left');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0)
            return $qry->result_array();
        return false;
    }
    function gethomesliders()
    {
        $this->db->order_by('t.orderby', 'asc');
        $this->db->select('t.*,i.image');
        $this->db->from('home_slider_master t');
        $this->db->join('images_master i', 'i.id = t.image', 'left');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0)
            return $qry->result_array();
        return false;
    }
    function gethomewhycon()
    {
        $this->db->order_by('t.orderby', 'asc');
        $this->db->select('t.*,i.image,s.card_heading');
        $this->db->from('home_why_coz_master t');
        $this->db->join('images_master i', 'i.id = t.image', 'left');
        $this->db->join('sub_service s', 's.id = t.serviceid', 'left');

        $qry = $this->db->get();
        if ($qry->num_rows() > 0)
            return $qry->result_array();
        return false;
    }
    function getsubscriber()
    {
        $this->db->from('subscribe_master sm');
        $this->db->order_by('sm.id', 'desc');
        $qry = $this->db->get();
        return $qry->result_array();
    }
    function getjobenquiry()
    {
        $this->db->from('career_master c');
        $this->db->order_by('c.id', 'desc');
        $qry = $this->db->get();
        return $qry->result_array();
    }
    function getcontactenquiry($form)
    {
        $this->db->order_by('id', 'desc');
        $qry = $this->db->get('contact_master');
        return $qry->result_array();
    }
    function getcategory($type = false)
    {
        if ($type)
            $this->db->where('type', $type);
        $this->db->order_by('id', 'desc');
        $this->db->where('is_deleted', 0);
        $qry = $this->db->get('category_master');
        return $qry->result_array();
    }
    function getcounters()
    {
        $qry = $this->db->get('counter_master');
        return $qry->result_array();
    }
    function getjobs()
    {
        $this->db->from('jobs_master j');
        $this->db->order_by('id', 'desc');
        $qry = $this->db->get();
        return $qry->result_array();
    }
    function getservicebyid($where)
    {
        $this->db->where($where);
        $qry = $this->db->get('sub_service');
        return $qry->row_array();
    }
    function checksubserviceexist($where)
    {
        $this->db->where($where);
        $qry = $this->db->get('sub_service');
        if ($qry->num_rows() > 0) {
            return true;
        }
        return false;
    }
    function checkparentserviceexist($where)
    {
        $this->db->where($where);
        $qry = $this->db->get('parent_service');
        if ($qry->num_rows() > 0) {
            return true;
        }
        return false;
    }
    function getparentservicebyid($where)
    {
        $this->db->where($where);
        $qry = $this->db->get('parent_service');
        return $qry->row_array();
    }
    function getjobbyid($where)
    {
        $this->db->where($where);
        $qry = $this->db->get('jobs_master');
        return $qry->row_array();
    }
    function gettestimonialbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('testimonials');
        return $qry->row_array();
    }
    function getteambyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('team_master');
        return $qry->row_array();
    }
    function getindustrybyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('industry_master');
        return $qry->row_array();
    }
    function getclientbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('client_master');
        return $qry->row_array();
    }
    function gethomebannerbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_banner_master');
        return $qry->row_array();
    }
    function getwhycozbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_why_coz_master');
        return $qry->row_array();
    }
    function gethomesliderbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_slider_master');
        return $qry->row_array();
    }
    function getctabyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_cta');
        return $qry->row_array();
    }
    function gethomeindustriesbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_industries_master');
        return $qry->row_array();
    }
    function gethomeinnovationbyid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_innovation');
        return $qry->row_array();
    }
    function gethomeoursignificant($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_our_sgni_master');
        return $qry->row_array();
    }
    public function getpageslist()
    {
        $this->db->select('id,label');
        $q = $this->db->get('seo_master');
        return $q->result_array();
    }

    public function getwebdetails()
    {
        $this->db->where('id', 1);
        $qry = $this->db->get('web_master');
        return $qry->row_array();
    }
    public function getServices()
    {
        $this->db->select('id, slug, card_heading as name');
        $q = $this->db->get('parent_service');
        $rec = $q->result_array();
        $this->db->reset_query();

        $this->db->select('id, slug, card_heading as name');
        $q = $this->db->get('sub_service');
        $subServices = $q->result_array();

        // Add prefix or identifier to the sub-service IDs
        foreach ($subServices as &$subService) {
            $subService['id'] = 'sub_' . $subService['id'];
        }

        // Merge the services and sub-services arrays
        $rec = array_merge($rec, $subServices);

        return $rec;
    }


    public function servicesofferlist()
    {


        $this->db->select('id, slug, card_heading as name');
        //$this->db->where_in('pserv', 3);
        $q = $this->db->get('sub_service');
        return $q->result_array();
    }

    public function getparentserviceslist()
    {
        $this->db->select('id,card_heading  as name');
        $q = $this->db->get('parent_service');
        return $q->result_array();
    }
    public function getsubserviceslist($pid, $sid)
    {
        $this->db->select('id,card_heading as name');
        $this->db->where('pserv', $pid);
        $this->db->where('sserv', $sid);
        $q = $this->db->get('sub_service');
        return $q->result_array();
    }
    function getparentservice()
    {
        $this->db->order_by('s.id', 'desc');
        $this->db->select('s.*,i.image');
        $this->db->from('parent_service s');
        $this->db->join('images_master i', 'i.id =s.card_image', 'left');
        $qry = $this->db->get();
        return $qry->result_array();
    }
    function getservice()
    {
        $this->db->order_by('s.id', 'desc');
        $this->db->select('s.*,i.image');
        $this->db->from('sub_service s');
        $this->db->join('images_master i', 'i.id =s.card_image', 'left');
        $qry = $this->db->get();
        return $qry->result_array();
    }
    function getservice2()
    {
        $this->db->order_by('s.id', 'desc');
        $this->db->select('s.*,i.image,p.card_heading as pservice');
        $this->db->from('sub_service s');
        $this->db->join('images_master i', 'i.id =s.card_image', 'left');
        $this->db->join('parent_service p', 'p.id =s.pserv', 'left');
        $this->db->where('s.id !=', 45); // Exclude the specific ID
        $qry = $this->db->get();
        return $qry->result_array();
    }

    function getimageslist($postData = null)
    {
        $response = array();
        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value
        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (image like '%" . $searchValue . "%'  ) ";
        }
        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('images_master');
        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;
        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->from('images_master');
        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;
        ## Fetch records
        // $this->db->select('*');
        if ($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by('id', 'desc');
        $this->db->limit($rowperpage, $start);
        $this->db->from('images_master');
        $records = $this->db->get()->result();
        $data = array();
        $i = 1;
        $url = base_url('uploads/images/');
        foreach ($records as $record) {
            $image = "<img src='$url$record->image' style='border-radius: 0;' />";
            $alt = "<a href='javascript:void(0)' class='edit-image' data-id='$record->id' data-text='$record->alt_text' data-nname='$record->image' data-oname='$record->image' ><i class='fa fa-edit'></i> $record->alt_text</a>";
            $delete = "<a href='javascript:void(0)' class='text-danger delete-btn' data-id='$record->id'><i class='fa fa-trash'></i></a>";
            $data[] = array(
                "id" => $i,
                "name" => $record->image,
                "image" => $image,
                "alt" => $alt,
                "delete" => $delete,
            );
            $i++;
        }
        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );
        return $response;
    }
    function getpageheaderbyid($id)
    {
        $this->db->where('id', $id);
        $this->db->select('header,footer');
        $q = $this->db->get('seo_master');
        //echo $this->db->last_query(); exit;
        if ($q->num_rows() > 0) {
            return $q->row_array();
        }
        return false;
    }
    function getgallery_logos($type = 1)
    {
        $this->db->select('i.*,gm.id as imid');
        $this->db->from('images_master i');
        $this->db->join('gallery_logo_master gm', 'gm.imageid=i.id');
        $this->db->where('gm.type', $type);
        $this->db->order_by('i.id', 'desc');
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            return $qry->result_array();
        }
        return false;
    }

    function gethomesection7byid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_section7');
        return $qry->row_array();
    }
    function update_home_section7($data, $where)
    {
        $this->db->update('home_section7', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    function gethomesection8byid($id)
    {
        $this->db->where('id', $id);
        $qry = $this->db->get('home_section8');
        return $qry->row_array();
    }
    function update_home_section8($data, $where)
    {
        $this->db->update('home_section8', $data, $where);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
}
