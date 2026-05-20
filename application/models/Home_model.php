  <?php defined('BASEPATH') or exit('No direct script access allowed');
	class Home_model extends CI_Model
	{
		function getproducts()
		{

			$this->db->select('slug,name,short_description');
			$qry = $this->db->get_where('products', ['is_active' => 1, 'category' => 0]);
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getfeaturedproducts()
		{
			$this->db->select('p.slug,p.name,p.short_description,i.image,i.alt_text');

			$this->db->from('products p');
			$this->db->join('images_master i', 'i.id=p.fimage', 'left');
			$this->db->where(['p.is_active' => 1, 'p.fproduct' => 1]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function get_home_banners()
		{
			$this->db->select('h.title,h.video_id,h.short_description,h.cta_btn,h.cta_link,i.image,i.alt_text');
			$this->db->order_by('h.orderby', 'asc');
			$this->db->from('home_banner_master h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function get_home_sliders()
		{
			$this->db->select('h.title,h.short_description,h.cta_btn,h.cta_link,i.image,i.alt_text,j.image mob_image,j.alt_text as mob_alt');
			$this->db->order_by('h.orderby', 'asc');
			$this->db->from('home_slider_master h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$this->db->join('images_master j', 'j.id=h.mob_image', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function get_home_whycoz()
		{
			$this->db->select('h.title,h.short_description,i.image,i.alt_text');
			$this->db->order_by('h.orderby', 'asc');
			$this->db->from('home_why_coz_master h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$this->db->where('h.serviceid', 0);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}

		function get_service_whycoz($type, $limit = false)
		{
			if ($limit)
				$this->db->limit($limit);
			$this->db->select('h.title,h.short_description, h.ctalink,i.image,i.alt_text');
			$this->db->order_by('h.orderby', 'asc');
			$this->db->from('home_why_coz_master h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$this->db->where(['h.serviceid' => $type]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}

		/*function get_service_whycoz()
    {
      $this->db->select('h.title,h.short_description,i.image,i.alt_text');
      $this->db->order_by('h.orderby','asc');
      $this->db->from('home_why_coz_master h');
      $this->db->join('images_master i', 'i.id=h.image','left');
      $this->db->where('h.serviceid', 1);
      $qry = $this->db->get();
      if ($qry->num_rows() > 0) {
        return $qry->result_array();
      }
      return false;
    } */
		function get_home_our_signi()
		{
			$this->db->select('h.whytitle,h.title,h.short_description,h.significant_1,h.significant_2,h.significant_3,h.significant_4 ,h.significant_5 ,h.significant_6,i.image,i.alt_text');
			$this->db->order_by('h.orderby', 'asc');
			$this->db->from('home_our_sgni_master h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function get_home_cta()
		{
			$this->db->select('h.title,h.short_description,h.cta_btn,h.cta_btn2,h.cta_link,h.cta_link2,i.image,i.alt_text');
			$this->db->order_by('h.orderby', 'asc');
			$this->db->from('home_cta h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function get_home_content()
		{
			$this->db->select('h.sub_menu_title1,h.sub_menu_title2, h.sub_menu_title3, h.sub_menu_title4,h.title,h.description,h.content,h.cta_btn,h.cta_link,h.offerin_heading,h.offerin_content,i.image,i.alt_text');
			//$this->db->order_by('h.orderby','asc');
			$this->db->from('pages h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$this->db->where('h.id', 1);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}

		function get_home_industries()
		{
			$this->db->select('h.title,h.short_description,h.cta_btn,h.cta_link,i.image,i.alt_text');
			//$this->db->order_by('h.orderby','asc');
			$this->db->from('home_Industries_master h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$this->db->where('h.id', 1);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function get_home_innovation()
		{
			$this->db->select('h.title,h.short_description,h.cta_btn,h.cta_link,i.image,i.alt_text');
			//$this->db->order_by('h.orderby','asc');
			$this->db->from('home_Innovation h');
			$this->db->join('images_master i', 'i.id=h.image', 'left');
			$this->db->where('h.id', 1);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getsubproductsbymainproduct($id)
		{
			$this->db->select('p.slug,p.name,p.short_description,i.image,i.alt_text');

			$this->db->from('products p');
			$this->db->join('images_master i', 'i.id=p.fimage');
			$this->db->where(['p.is_active' => 1, 'p.category' => $id]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function get_header_footer($page)
		{
			$this->db->where('page', $page);
			$this->db->select('header,footer');
			$q = $this->db->get('seo_master');
			if ($q->num_rows() > 0) {
				return $q->row_array();
			}
			return false;
		}
		public function getparentservicesbytags($tag)
		{
			$this->db->select('p.card_heading, p.card_description, i.image, i.alt_text, p.slug');
			$this->db->from('parent_service p');
			$this->db->join('images_master i', 'i.id = p.card_image', 'left');
			$this->db->where("FIND_IN_SET('$tag', p.tags) != 0");
			$this->db->where(['p.is_active' => 1]);
			$this->db->group_by('p.id');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return [];
		}

		public function getservicesbytags($tag)
		{
			$this->db->select('p.card_heading, p.card_description, i.image, i.alt_text, p.slug,s.slug as parent_slug');
			$this->db->from('sub_service p');
			$this->db->join('images_master i', 'i.id = p.card_image', 'left');
			$this->db->join('parent_service s', 's.id = p.pserv', 'left');
			$this->db->where("FIND_IN_SET('$tag', p.tags) != 0");
			$this->db->where(['p.is_active' => 1]);
			$this->db->group_by('p.id');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return [];
		}

		function getparentalltags()
		{
			$this->db->select('tags');
			$qry = $this->db->get_where('parent_service', ['is_active' => 1]);

			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return [];
		}
		function getsuballtags()
		{
			$this->db->select('tags');
			$qry = $this->db->get_where('sub_service', ['is_active' => 1]);
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return [];
		}
		function getreportssbyfilter($type)
		{
			if ($type == 5) {
				$this->db->where('b.ctype', 0);
			}

			$this->db->select('b.id, b.title, b.slug, b.posted, b.is_webinar, i.image, i.alt_text, b.posted as date,b.tags');
			$this->db->from('blogs b');
			$this->db->join('images_master i', 'i.id = b.thumbnail');
			$this->db->where(['b.is_active' => 1, 'b.type' => $type]);
			$this->db->order_by("b.id", "desc");

			$qry = $this->db->get();
			//echo $this->db->last_query(); exit;

			if ($qry->num_rows() > 0) {
				$results = $qry->result_array();

				foreach ($results as &$result) {
					$result['date'] = date('d-M-Y', strtotime($result['date']));
				}

				return $results;
			}

			return false;
		}

		function getblogs($type, $limit = false)
		{
			if ($limit)
				$this->db->limit($limit);
			$this->db->select('b.id,b.title,b.description,b.slug,b.posted,i.image,i.alt_text,b.tags');
			$this->db->from('blogs b');
			$this->db->join('images_master i', 'i.id=b.thumbnail');
			$this->db->where(['b.is_active' => 1, 'b.type' => $type]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}

		function getrecblogs($type, $limit = false)
		{
			$this->db->order_by('created_at', 'DESC');
			if ($limit)
				$this->db->limit($limit);
			$this->db->select('b.id,b.title,b.description,b.slug,b.posted,i.image,i.alt_text,b.tags');
			$this->db->from('blogs b');
			$this->db->join('images_master i', 'i.id=b.thumbnail');
			$this->db->where(['b.is_active' => 1, 'b.type' => $type]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getblogsbyfilter($type, $service, $author, $query)
		{
			if ($type == 3) {
				$this->db->where('b.ctype', 0);
			} elseif ($type == 4) {
				$type = 3;
				$this->db->where('b.ctype', 1);
			}

			$this->db->select('b.id, b.title,b.type,b.slug, b.posted, b.is_webinar, i.image, i.alt_text, b.posted as date,b.tags');
			$this->db->from('blogs b');
			$this->db->join('images_master i', 'i.id = b.thumbnail');
			$this->db->where(['b.is_active' => 1, 'b.type' => $type]);
			$this->db->where(['b.end_date >=' => date('Y-m-d')]);
			$this->db->order_by("b.id", "desc");

			if (!empty($service))
				$this->db->where('serviceid', $service);
			if (!empty($author))
				$this->db->where('author', $author);
			if (!empty($query))
				$this->db->like('title', $query);

			$qry = $this->db->get();

			if ($qry->num_rows() > 0) {
				$results = $qry->result_array();

				foreach ($results as &$result) {
					$result['date'] = date('d-M-Y', strtotime($result['date']));
				}

				return $results;
			}

			return false;
		}
		function getjobsfilter($query)
		{

			$this->db->select('j.id, j.title, j.description, j.slug, j.created_at,j.created_at as date,j.tags');
			$this->db->from('jobs_master j');
			$this->db->where(['j.is_active' => 1]);
			$this->db->order_by("j.id", "asc");


			if (!empty($query))
				$this->db->like('title', $query);

			$qry = $this->db->get();
			// echo $this->db->last_query();

			if ($qry->num_rows() > 0) {
				$results = $qry->result_array();

				foreach ($results as &$result) {
					$result['date'] = date('d-M-Y', strtotime($result['date']));
				}
				return $results;
			}

			return false;
		}
		function getcasesbyservice($id, $type)
		{
			$this->db->select(' b.title, b.slug, i.image, i.alt_text,b.ctype');
			$this->db->from('blogs b');
			$this->db->join('images_master i', 'i.id = b.thumbnail');
			$this->db->where(['b.is_active' => 1, 'b.serviceid' => $id, 'type' => $type]);


			$qry = $this->db->get();

			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}

			return false;
		}


		function getpostservices($type, $ctype)
		{
			if ($type == 4) {
				$type = 3;
			}

			$this->db->select('card_heading as name, blogs.serviceid');
			$this->db->from('parent_service');
			$this->db->join('blogs', 'parent_service.id = blogs.serviceid');
			$this->db->where(['blogs.is_active' => 1, 'blogs.type' => $type, 'blogs.ctype' => $ctype]);
			$this->db->group_by('blogs.serviceid');
			$qry1 = $this->db->get();

			//  $this->db->select('card_heading as name, CONCAT("sub_", sub_service.id) AS serviceid');
			//  $this->db->from('sub_service');
			//  $this->db->join('blogs', 'sub_service.id = SUBSTRING(blogs.serviceid, 5)');
			//  $this->db->where(['blogs.is_active' => 1, 'blogs.type' => $type, 'blogs.ctype' => $ctype]);
			//  $this->db->group_by('blogs.serviceid');
			//  $qry2 = $this->db->get();

			$results1 = $qry1->result_array();
			//  $results2 = $qry2->result_array();

			//  return array_merge($results1, $results2);
			return $results1;
		}




		function getpostauthors($type, $ctype)
		{
			if ($type == 4) {
				$type = 3;
			}
			$this->db->select('a.name,a.id');
			$this->db->from('blogs b');
			$this->db->join('author_master a', 'a.id = b.author');
			$this->db->where(['b.is_active' => 1, 'b.type' => $type, 'b.ctype' => $ctype]);
			$this->db->group_by('b.author');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}

		function getteamlist($type = 0, $limit = false)
		{
			if (!empty($limit))
				$this->db->limit($limit);

			$this->db->order_by("CASE WHEN t.orderby = 0 THEN 1 ELSE 0 END", 'asc', false);
			$this->db->order_by('t.orderby', 'asc');
			$this->db->select('t.name,t.title,t.details,t.link,t.facebook_link,t.insta_link,t.twitter_link,t.slug,i.image,i.alt_text');
			$this->db->from('team_master t');
			$this->db->join('images_master i', 'i.id=t.image', 'left');
			if ($type != 0) {
				$this->db->where('t.type', $type);
			}
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}


		function getclientcategories()
		{

			$this->db->select('m.name,m.id');
			$this->db->from('client_master c');
			$this->db->join('category_master m', 'm.id=c.categoryid');
			$this->db->group_by('c.categoryid');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getclientlogos($id)
		{
			$this->db->select('m.image,link');
			$this->db->from('client_master c');
			$this->db->join('images_master m', 'm.id=c.image');
			$this->db->where('categoryid', $id);
			$qry = $this->db->get();
			return $qry->result_array();
		}
		function getclientlogosbyservice($ids)
		{
			$this->db->select('m.image,link');
			$this->db->from('client_master c');
			$this->db->join('images_master m', 'm.id=c.image');
			$this->db->where_in('c.id', $ids);
			$qry = $this->db->get();
			return $qry->result_array();
		}

		function getteambyslug($slug)
		{
			$this->db->select('t.*,i.image,i.alt_text');
			$this->db->from('team_master t');
			$this->db->join('images_master i', 'i.id=t.image', 'left');
			$this->db->where('t.slug', $slug);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->row_array();
			}
			return false;
		}
		function getparentservicehomecard()
		{
			$this->db->select('p.card_heading,p.card_description,i.image,i.alt_text,p.slug');
			$this->db->from('parent_service p');
			$this->db->join('images_master i', 'i.id=p.card_image', 'left');
			$this->db->where('p.is_active', 1);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}

		public function getwebdetails()
		{
			$this->db->where('id', 1);
			$qry = $this->db->get('web_master');
			return $qry->row_array();
		}
		function getservicehomecard()
		{
			$this->db->select('p.card_heading,p.card_description,p.is_home,i.image,i.alt_text,p.slug');
			$this->db->order_by('p.priority', 'asc');
			$this->db->from('sub_service p');
			$this->db->join('images_master i', 'i.id=p.card_image', 'left');
			$this->db->where('p.is_active', 1);
			$this->db->where('p.is_home', 1);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getserviceforparentcard($pserv)
		{
			$this->db->select('p.card_heading,p.card_description,i.image,i.alt_text,p.slug');
			$this->db->from('sub_service p');
			$this->db->join('images_master i', 'i.id=p.card_image', 'left');
			$this->db->where(['p.pserv' => $pserv, 'p.is_active' => 1]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getserviceforinnerparentcard($pserv)
		{
			$this->db->select('p.card_heading,p.card_description,i.image,i.alt_text,p.slug');
			$this->db->from('sub_service p');
			$this->db->join('images_master i', 'i.id=p.card_image', 'left');
			$this->db->where(['p.sserv' => $pserv, 'p.is_active' => 1]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getparentservicebyid($id)
		{
			$this->db->where('t.slug', $id);
			$this->db->select('t.*,i.image as inner_banner_image ,i.alt_text as alt_inner_banner_image,j.image as inner_banner_mimage ,j.alt_text as alt_inner_banner_mimage,k.image as advantage_image ,k.alt_text as alt_advantage_image,l.image as transformation_image ,l.alt_text as alt_transformation_image');
			$this->db->from('parent_service t');
			$this->db->join('images_master i', 'i.id=t.inner_banner_image', 'left');
			$this->db->join('images_master j', 'j.id=t.inner_banner_mimage', 'left');
			$this->db->join('images_master k', 'k.id=t.advantage_image', 'left');
			$this->db->join('images_master l', 'l.id=t.transformation_image', 'left');
			$qry = $this->db->get();
			return $qry->row_array();
		}
		/*function getimagebyid($id)
    {
      $this->db->where('id', $id);
      $query = $this->db->get('images_master');
      return $qry->row_array();
    }*/

		function getinnerservicebyslug($slug)
		{
			$this->db->where(['t.slug' => $slug, 't.is_active' => 1]);
			$this->db->select('t.*,i.image as inner_banner_image ,i.alt_text as alt_text_banner, t.industries_image as industriesimage ,j.image as inner_banner_mimage, k.image as about_image,k.alt_text as about_alt_text, l.image as advantage_image,l.alt_text as advantage_alt_text');
			$this->db->from('sub_service t');
			$this->db->join('images_master i', 'i.id=t.inner_banner_image', 'left');
			$this->db->join('images_master j', 'j.id=t.inner_banner_mimage', 'left');
			$this->db->join('images_master k', 'k.id=t.about_image', 'left');
			$this->db->join('images_master l', 'l.id=t.advantage_image', 'left');
			$this->db->join('images_master m', 'm.id=t.industries_image', 'left');

			$qry = $this->db->get();
			return $qry->row_array();
		}
		function getindustriescard()
		{
			$this->db->select('t.title_home_card,t.slug,i.image,i.alt_text');
			$this->db->from('industry_master t');
			$this->db->join('images_master i', 'i.id=t.image_home_card', 'left');
			$this->db->where('t.is_active', 1);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getindustrybyslug($slug)
		{
			$this->db->select('t.*,i.image as image_banner ,i.alt_text as alt_text_banner,j.image as image_about ,j.alt_text as alt_text_about');
			$this->db->from('industry_master t');
			$this->db->join('images_master i', 'i.id=t.image_banner', 'left');
			$this->db->join('images_master j', 'j.id=t.image_about', 'left');
			$this->db->where(['t.is_active' => 1, 't.slug' => $slug]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->row_array();
			}
			return false;
		}
		function getclientslist()
		{
			$this->db->order_by('t.orderby asc');
			$this->db->select('t.title,t.short_description,t.link,i.image,i.alt_text');
			$this->db->from('client_master t');
			$this->db->join('images_master i', 'i.id=t.image', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getawardslist()
		{
			$this->db->order_by('t.orderby asc');
			$this->db->select('t.title,t.short_description,t.link,i.image,i.alt_text,t.date');
			$this->db->from('award_master t');
			$this->db->join('images_master i', 'i.id=t.image', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getsingleblog($where)
		{
			$this->db->where($where);
			$this->db->where(['b.is_active' => 1]);
			$this->db->select(
				'b.*,t.image as thumbnail,t.alt_text as thumbnal_alt,i.image,i.alt_text,ai.image as aimage,ai.alt_text as aalt_text,
				ae.image as section_5_image,
				af.image as section_2_image,
				ag.image as section_3_image,
				ah.image as section_4_image,
				ae.alt_text as section_5_alt_text,a.name as author,a.title as authortitle'
			);
			$this->db->from('blogs b');
			$this->db->join('images_master i', 'i.id=b.image', 'left');
			$this->db->join('images_master t', 't.id=b.thumbnail', 'left');
			$this->db->join('author_master a', 'a.id=b.author', 'left');
			$this->db->join('images_master ai', 'ai.id=a.image', 'left');
			$this->db->join('images_master ae', 'ae.id=b.section_5_image', 'left');
			$this->db->join('images_master af', 'af.id=b.section_2_image', 'left');
			$this->db->join('images_master ag', 'ag.id=b.section_3_image', 'left');
			$this->db->join('images_master ah', 'ah.id=b.section_4_image', 'left');
			$qry = $this->db->get();

			if ($qry->num_rows() > 0) {
				return $qry->row_array();
			}
			return false;
		}


		function getrecentblogs()
		{

			$this->db->select('b.*,i.image,i.alt_text,ai.image as aimage,ai.alt_text as aalt_text,a.name as author,a.title as authortitle');
			$this->db->from('blogs b');
			$this->db->limit(3);  // Limit the results to 10 rows
			$this->db->join('images_master i', 'i.id=b.image', 'left');
			$this->db->join('author_master a', 'a.id=b.author', 'left');
			$this->db->join('images_master ai', 'ai.id=a.image', 'left');
			$qry = $this->db->get();
			return  $qry->result_array(); // Return the result as an array


			// if ($qry->num_rows() > 0) {
			//   return $qry->row_array();
			// }
			// return false;
		}
		function getjobs($key = false)
		{
			if ($key)
				$this->db->like('title', $key);
			$this->db->select('title,description,slug,tags');
			$qry = $this->db->get_where('jobs_master', ['is_active' => 1]);
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getsinglejob($where)
		{
			$this->db->where($where);
			$qry = $this->db->get_where('jobs_master', ['is_active' => 1]);
			if ($qry->num_rows() > 0) {
				return $qry->row_array();
			}
			return false;
		}
		function getcategorylist()
		{
			$this->db->select('id,name');
			$qry = $this->db->get_where('product_category', ['is_deleted' => 0]);
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getvideoslist()
		{
			$qry = $this->db->get('video_master');
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getimageslist($type = 1)
		{
			$this->db->select('i.image,i.alt_text');
			$this->db->from('images_master i');
			$this->db->join('gallery_logo_master g', 'g.imageid=i.id');
			$this->db->where(['type' => $type]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getgalleryimages($offset = 1)
		{
			$this->db->limit(6, $offset);
			$this->db->select('i.image,i.alt_text');
			$this->db->from('images_master i');
			$this->db->join('gallery_logo_master g', 'g.imageid=i.id');
			$this->db->where(['type' => 2]);
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function gettestimonials($limit = false)
		{
			if ($limit)
				$this->db->limit($limit);
			$this->db->select('t.title,t.detail,t.description,t.video,i.image,i.alt_text');
			$this->db->from('testimonials t');
			$this->db->join('images_master i', 'i.id=t.image', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getparentserviceformenu()
		{
			$this->db->select('id,card_heading as name,slug');
			$qry = $this->db->get_where('parent_service', ['is_active' => 1]);
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getsubserviceformenu($pserv, $sserv = 0)
		{
			$this->db->select('id,card_heading as name,slug');
			$this->db->where(['is_active' => 1, 'pserv' => $pserv, 'sserv' => $sserv]);
			$this->db->order_by('priority', 'ASC');
			$qry = $this->db->get('sub_service');
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}
		function getSubsubserviceformenu($sserv)
		{
			$this->db->select('id,card_heading as name,slug');
			$qry = $this->db->get_where('sub_service', ['is_active' => 1, 'sserv' => $sserv]);
			if ($qry->num_rows() > 0) {
				return $qry->result_array();
			}
			return false;
		}

		function getimagebyid($id)
		{
			$qry = $this->db->get_where('images_master', ['id' => $id]);
			if ($qry->num_rows() > 0) {
				return $qry->row_array();
			}
			return false;
		}
		function getcategoryname($id)
		{
			$this->db->select('name');
			$qry = $this->db->get_where('product_category', ['id' => $id]);
			if ($qry->num_rows() > 0) {
				$r = $qry->row_array();
				return $r['name'];
			}
			return false;
		}
		function getproductbyslug($where)
		{
			$this->db->where($where);
			$this->db->select('p.*,i.image,i.alt_text,ij.image as image2,ij.alt_text as alt_text2,k.image as image3,k.alt_text as alt_text3, c.image as cover, c.alt_text as cover_alttext,sim.image as simage2');
			$this->db->from('products p');
			$this->db->join('images_master i', 'i.id=p.image', 'left');
			$this->db->join('images_master ij', 'ij.id=p.image2', 'left');
			$this->db->join('images_master k', 'k.id=p.image3', 'left');
			$this->db->join('images_master c', 'c.id=p.cover', 'left');
			$this->db->join('images_master sim', 'sim.id=p.simage2', 'left');
			$qry = $this->db->get();
			if ($qry->num_rows() > 0) {
				return $qry->row_array();
			}
			return false;
		}
	}
