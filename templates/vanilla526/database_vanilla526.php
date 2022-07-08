<?php

namespace database1;

require_once '../../database/vanilla526.php';

class database_vanilla526 {

	private $db;
	private $host;
	private $user;
	private $password;
	private $database;
	private $port;

	public function __construct($host, $user, $password, $database, $port)
	{
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
		$this->port = $port;
		$this->connect();
	}

	public function __destruct()
	{
		$this->close();
		$this->db = null;
	}

	public function connect()
	{
		$this->db = new \mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
		if ($this->db->connect_errno) {
			echo "Failed to connect to MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error;
		}
	}

	public function close()
	{
		$this->db->close();
	}

	// vanilla526
	// ID INT

	// title VARCHAR(80)

	// seo_lang VARCHAR(5)
	// seo_title VARCHAR(100)
	// seo_author VARCHAR(50)
	// seo_copy VARCHAR(50)
	// seo_desc VARCHAR(250)
	// seo_keywords VARCHAR(250)
	// seo_url VARCHAR(250)
	// seo_image VARCHAR(250)

	// NavItem1 VARCHAR(25)
	// NavItem2 VARCHAR(25)
	// NavItem3 VARCHAR(25)
	// NavItem4 VARCHAR(25)
	// NavItem5 VARCHAR(25)

	// Headline VARCHAR(50)
	// StrongSubHeadline VARCHAR(50)
	// SubHeadline VARCHAR(50)
	// HeaderCtaBtn VARCHAR(25)

	// P2Header VARCHAR(50)
	// P2HeaderText VARCHAR(250)
	// P2HeaderListItem1 VARCHAR(50)
	// P2HeaderListItem2 VARCHAR(50)
	// P2HeaderListItem3 VARCHAR(50)
	// P2HeaderListItem4 VARCHAR(50)
	// P2HeaderCtaBtn VARCHAR(25)
	// P2BoxTitle1 VARCHAR(50)
	// P2BoxText1 VARCHAR(250)
	// P2BoxTitle2 VARCHAR(50)
	// P2BoxText2 VARCHAR(250)
	// P2BoxTitle3 VARCHAR(50)
	// P2BoxText3 VARCHAR(250)
	// P2BoxTitle4 VARCHAR(50)
	// P2BoxText4 VARCHAR(250)

	// CarouselImg1 VARCHAR(250)
	// CarouselText1 VARCHAR(100)
	// CarouselSub1 VARCHAR(100)
	// CarouselImg2 VARCHAR(250)
	// CarouselText2 VARCHAR(100)
	// CarouselSub2 VARCHAR(100)
	// CarouselImg3 VARCHAR(250)
	// CarouselText3 VARCHAR(100)
	// CarouselSub3 VARCHAR(100)
	// CarouselImg4 VARCHAR(250)
	// CarouselText4 VARCHAR(100)
	// CarouselSub4 VARCHAR(100)
	// CarouselImg5 VARCHAR(250)
	// CarouselText5 VARCHAR(100)
	// CarouselSub5 VARCHAR(100)
	// CarouselImg6 VARCHAR(250)
	// CarouselText6 VARCHAR(100)
	// CarouselSub6 VARCHAR(100)
	// CarouselImg7 VARCHAR(250)
	// CarouselText7 VARCHAR(100)
	// CarouselSub7 VARCHAR(100)
	// CarouselImg8 VARCHAR(250)
	// CarouselText8 VARCHAR(100)
	// CarouselSub8 VARCHAR(100)

	// TabImg1 VARCHAR(250)
	// TabText1 VARCHAR(250)
	// TabImg2 VARCHAR(250)
	// TabText2 VARCHAR(250)
	// TabImg3 VARCHAR(250)
	// TabText3 VARCHAR(250)
	// TabImg4 VARCHAR(250)
	// TabText4 VARCHAR(250)
	// TabItem1 VARCHAR(50)
	// TabItem2 VARCHAR(50)
	// TabItem3 VARCHAR(50)
	// TabItem4 VARCHAR(50)

	// CompanyName VARCHAR(50)

	public function getVanilla526()
	{
		$this->connect();
		// make a select statement to select multiple tables
		$result = $this->db->query("SELECT * FROM vanilla526");
		$vanilla526_data = array();
		while ($row = $result->fetch_assoc()) {
			$vanilla526_data[] = new Vanilla526($row["id"], $row["title"], $row["seo_lang"], $row["seo_title"], $row["seo_author"], $row["seo_copy"], $row["seo_desc"], $row["seo_keywords"], $row["seo_url"], $row["seo_image"], $row["NavItem1"], $row["NavItem2"], $row["NavItem3"], $row["NavItem4"], $row["NavItem5"], $row["Headline"], $row["StrongSubHeadline"], $row["SubHeadline"], $row["HeaderCtaBtn"], $row["P2Header"], $row["P2HeaderText"], $row["P2HeaderListItem1"], $row["P2HeaderListItem2"], $row["P2HeaderListItem3"], $row["P2HeaderListItem4"], $row["P2HeaderCtaBtn"], $row["P2BoxTitle1"], $row["P2BoxText1"], $row["P2BoxTitle2"], $row["P2BoxText2"], $row["P2BoxTitle3"], $row["P2BoxText3"], $row["P2BoxTitle4"], $row["P2BoxText4"], $row["CarouselImg1"], $row["CarouselText1"], $row["CarouselSub1"], $row["CarouselImg2"], $row["CarouselText2"], $row["CarouselSub2"], $row["CarouselImg3"], $row["CarouselText3"], $row["CarouselSub3"], $row["CarouselImg4"], $row["CarouselText4"], $row["CarouselSub4"], $row["CarouselImg5"], $row["CarouselText5"], $row["CarouselSub5"], $row["CarouselImg6"], $row["CarouselText6"], $row["CarouselSub6"], $row["CarouselImg7"], $row["CarouselText7"], $row["CarouselSub7"], $row["CarouselImg8"], $row["CarouselText8"], $row["CarouselSub8"], $row["TabImg1"], $row["TabText1"], $row["TabImg2"], $row["TabText2"], $row["TabImg3"], $row["TabText3"], $row["TabImg4"], $row["TabText4"], $row["TabItem1"], $row["TabItem2"], $row["TabItem3"], $row["TabItem4"], $row["CompanyName"]);
		}
		return $vanilla526_data;
	}

	public function getVanilla526ByID($id)
	{
		$this->connect();
		$result = $this->db->query("SELECT * FROM vanilla526 WHERE ID = $id");
		$row = $result->fetch_assoc();
		if (is_null($row)) return null;
		return new Vanilla526($row["id"], $row["title"], $row["seo_lang"], $row["seo_title"], $row["seo_author"], $row["seo_copy"], $row["seo_desc"], $row["seo_keywords"], $row["seo_url"], $row["seo_image"], $row["NavItem1"], $row["NavItem2"], $row["NavItem3"], $row["NavItem4"], $row["NavItem5"], $row["Headline"], $row["StrongSubHeadline"], $row["SubHeadline"], $row["HeaderCtaBtn"], $row["P2Header"], $row["P2HeaderText"], $row["P2HeaderListItem1"], $row["P2HeaderListItem2"], $row["P2HeaderListItem3"], $row["P2HeaderListItem4"], $row["P2HeaderCtaBtn"], $row["P2BoxTitle1"], $row["P2BoxText1"], $row["P2BoxTitle2"], $row["P2BoxText2"], $row["P2BoxTitle3"], $row["P2BoxText3"], $row["P2BoxTitle4"], $row["P2BoxText4"], $row["CarouselImg1"], $row["CarouselText1"], $row["CarouselSub1"], $row["CarouselImg2"], $row["CarouselText2"], $row["CarouselSub2"], $row["CarouselImg3"], $row["CarouselText3"], $row["CarouselSub3"], $row["CarouselImg4"], $row["CarouselText4"], $row["CarouselSub4"], $row["CarouselImg5"], $row["CarouselText5"], $row["CarouselSub5"], $row["CarouselImg6"], $row["CarouselText6"], $row["CarouselSub6"], $row["CarouselImg7"], $row["CarouselText7"], $row["CarouselSub7"], $row["CarouselImg8"], $row["CarouselText8"], $row["CarouselSub8"], $row["TabImg1"], $row["TabText1"], $row["TabImg2"], $row["TabText"], $row["TabImg3"], $row["TabText3"], $row["TabImg4"], $row["TabText4"], $row["TabItem1"], $row["TabItem2"], $row["TabItem3"], $row["TabItem4"], $row["CompanyName"]);
	}

	public function setVanilla526($id, $title, $seo_lang, $seo_title, $seo_author, $seo_copy, $seo_desc, $seo_keywords, $seo_url, $seo_image, $nav_item1, $nav_item2, $nav_item3, $nav_item4, $nav_item5, $headline, $strong_sub_headline, $sub_headline, $header_cta_btn, $p2_header, $p2_header_text, $p2_header_list_item1, $p2_header_list_item2, $p2_header_list_item3, $p2_header_list_item4, $p2_header_cta_btn, $p2_box_title1, $p2_box_text1, $p2_box_title2, $p2_box_text2, $p2_box_title3, $p2_box_text3, $p2_box_title4, $p2_box_text4, $carousel_img1, $carousel_text1, $carousel_sub1, $carousel_img2, $carousel_text2, $carousel_sub2, $carousel_img3, $carousel_text3, $carousel_sub3, $carousel_img4, $carousel_text4, $carousel_sub4, $carousel_img5, $carousel_text5, $carousel_sub5, $carousel_img6, $carousel_text6, $carousel_sub6, $carousel_img7, $carousel_text7, $carousel_sub7, $carousel_img8, $carousel_text8, $carousel_sub8, $tab_img1, $tab_text1, $tab_img2, $tab_text, $tab_img3, $tab_text3, $tab_img4, $tab_text4, $tab_item1, $tab_item2, $tab_item3, $tab_item4, $company_name)
	{
		$this->connect();
		if (is_null($id)) {
			$result = $this->db->query("INSERT INTO vanilla526 (title, seo_lang, seo_title, seo_author, seo_copy, seo_desc, seo_keywords, seo_url, seo_image, NavItem1, NavItem2, NavItem3, NavItem4, NavItem5, StrongSubHeadline, SubHeadline, HeaderCtaBtn, P2Header, P2HeaderText, P2HeaderListItem1, P2HeaderListItem2, P2HeaderListItem3, P2HeaderListItem4, P2HeaderCtaBtn, P2BoxTitle1, P2BoxText1, P2BoxTitle2, P2BoxText2, P2BoxTitle3, P2BoxText3, P2BoxTitle4, P2BoxText4, CarouselImg1, CarouselText1, CarouselSub1, CarouselImg2, CarouselText2, CarouselSub2, CarouselImg3, CarouselText3, CarouselSub3, CarouselImg4, CarouselText4, CarouselSub4, CarouselImg5, CarouselText5, CarouselSub5, CarouselImg6, CarouselText6, CarouselSub6, CarouselImg7, CarouselText7, CarouselSub7, CarouselImg8, CarouselText8, CarouselSub8, TabImg1, TabText1, TabImg2, TabText, TabImg3, TabText3, TabImg4, TabText4, TabItem1, TabItem2, TabItem3, TabItem4, CompanyName) VALUES ('$title', '$seo_lang', '$seo_title', '$seo_author', '$seo_copy', '$seo_desc', '$seo_keywords', '$seo_url', '$seo_image', '$nav_item1', '$nav_item2', '$nav_item3', '$nav_item4', '$nav_item5', '$strong_sub_headline', '$sub_headline', '$header_cta_btn', '$p2_header', '$p2_header_text', '$p2_header_list_item1', '$p2_header_list_item2', '$p2_header_list_item3', '$p2_header_list_item4', '$p2_header_cta_btn', '$p2_box_title1', '$p2_box_text1', '$p2_box_title2', '$p2_box_text2', '$p2_box_title3', '$p2_box_text3', '$p2_box_title4', '$p2_box_text4', '$carousel_img1', '$carousel_text1', '$carousel_sub1', '$carousel_img2', '$carousel_text2', '$carousel_sub2', '$carousel_img3', '$carousel_text3', '$carousel_sub3', '$carousel_img4', '$carousel_text4', '$carousel_sub4', '$carousel_img5', '$carousel_text5', '$carousel_sub5', '$carousel_img6', '$carousel_text6', '$carousel_sub6', '$carousel_img7', '$carousel_text7', '$carousel_sub7', '$carousel_img8', '$carousel_text8', '$carousel_sub8', '$tab_img1', '$tab_text1', '$tab_img2', '$tab_text', '$tab_img3', '$tab_text3', '$tab_img4', '$tab_text4', '$tab_item1', '$tab_item2', '$tab_item3', '$tab_item4', '$company_name')");
		} else {
			$result = $this->db->query("UPDATE vanilla526 SET title = '$title', seo_lang = '$seo_lang', seo_title = '$seo_title', seo_author = '$seo_author', seo_copy = '$seo_copy', seo_desc = '$seo_desc', seo_keywords = '$seo_keywords', seo_url = '$seo_url', seo_image = '$seo_image', NavItem1 = '$nav_item1', NavItem2 = '$nav_item2', NavItem3 = '$nav_item3', NavItem4 = '$nav_item4', NavItem5 = '$nav_item5', Headline = '$headline', StrongSubHeadline = '$strong_sub_headline', SubHeadline = '$sub_headline', HeaderCtaBtn = '$header_cta_btn', P2Header = '$p2_header', P2HeaderText = '$p2_header_text', P2HeaderListItem1 = '$p2_header_list_item1', P2HeaderListItem2 = '$p2_header_list_item2', P2HeaderListItem3 = '$p2_header_list_item3', P2HeaderListItem4 = '$p2_header_list_item4', P2HeaderCtaBtn = '$p2_header_cta_btn', P2BoxTitle1 = '$p2_box_title1', P2BoxText1 = '$p2_box_text1', P2BoxTitle2 = '$p2_box_title2', P2BoxText2 = '$p2_box_text2', P2BoxTitle3 = '$p2_box_title3', P2BoxText3 = '$p2_box_text3', P2BoxTitle4 = '$p2_box_title4', P2BoxText4 = '$p2_box_text4', CarouselImg1 = '$carousel_img1', CarouselText1 = '$carousel_text1', CarouselSub1 = '$carousel_sub1', CarouselImg2 = '$carousel_img2', CarouselText2 = '$carousel_text2', CarouselSub2 = '$carousel_sub2', CarouselImg3 = '$carousel_img3', CarouselText3 = '$carousel_text3', CarouselSub3 = '$carousel_sub3', CarouselImg4 = '$carousel_img4', CarouselText4 = '$carousel_text4', CarouselSub4 = '$carousel_sub4', CarouselImg5 = '$carousel_img5', CarouselText5 = '$carousel_text5', CarouselSub5 = '$carousel_sub5', CarouselImg6 = '$carousel_img6', CarouselText6 = '$carousel_text6', CarouselSub6 = '$carousel_sub6', CarouselImg7 = '$carousel_img7', CarouselText7 = '$carousel_text7', CarouselSub7 = '$carousel_sub7', CarouselImg8 = '$carousel_img8', CarouselText8 = '$carousel_text8', CarouselSub8 = '$carousel_sub8', TabImg1 = '$tab_img1', TabText1 = '$tab_text1', TabImg2 = '$tab_img2', TabText = '$tab_text', TabImg3 = '$tab_img3', TabText3 = '$tab_text3', TabImg4 = '$tab_img4', TabText4 = '$tab_text4', TabItem1 = '$tab_item1', TabItem2 = '$tab_item2', TabItem3 = '$tab_item3', TabItem4 = '$tab_item4', CompanyName = '$company_name' WHERE id = '$id'");
		}
	}

	public function applyVanilla526($vanilla526, $new = false)
	{
		$this->setVanilla526($new ? null : $vanilla526->getID(), $vanilla526->getTitle(), $vanilla526->getSeoLang(), $vanilla526->getSeoTitle(), $vanilla526->getSeoAuthor(), $vanilla526->getSeoCopy(), $vanilla526->getSeoDesc(), $vanilla526->getSeoKeywords(), $vanilla526->getSeoUrl(), $vanilla526->getSeoImage(), $vanilla526->getNavItem1(), $vanilla526->getNavItem2(), $vanilla526->getNavItem3(), $vanilla526->getNavItem4(), $vanilla526->getNavItem5(), $vanilla526->getHeadline(), $vanilla526->getStrongSubHeadline(), $vanilla526->getSubHeadline(), $vanilla526->getHeaderCtaBtn(), $vanilla526->getP2Header(), $vanilla526->getP2HeaderText(), $vanilla526->getP2HeaderListItem1(), $vanilla526->getP2HeaderListItem2(), $vanilla526->getP2HeaderListItem3(), $vanilla526->getP2HeaderListItem4(), $vanilla526->getP2HeaderCtaBtn(), $vanilla526->getP2BoxTitle1(), $vanilla526->getP2BoxText1(), $vanilla526->getP2BoxTitle2(), $vanilla526->getP2BoxText2(), $vanilla526->getP2BoxTitle3(), $vanilla526->getP2BoxText3(), $vanilla526->getP2BoxTitle4(), $vanilla526->getP2BoxText4(), $vanilla526->getCarouselImg1(), $vanilla526->getCarouselText1(), $vanilla526->getCarouselSub1(), $vanilla526->getCarouselImg2(), $vanilla526->getCarouselText2(), $vanilla526->getCarouselSub2(), $vanilla526->getCarouselImg3(), $vanilla526->getCarouselText3(), $vanilla526->getCarouselSub3(), $vanilla526->getCarouselImg4(), $vanilla526->getCarouselText4(), $vanilla526->getCarouselSub4(), $vanilla526->getCarouselImg5(), $vanilla526->getCarouselText5(), $vanilla526->getCarouselSub5(), $vanilla526->getCarouselImg6(), $vanilla526->getCarouselText6(), $vanilla526->getCarouselSub6(), $vanilla526->getCarouselImg7(), $vanilla526->getCarouselText7(), $vanilla526->getCarouselSub7(), $vanilla526->getCarouselImg8(), $vanilla526->getCarouselText8(), $vanilla526->getCarouselSub8(), $vanilla526->getTabImg1(), $vanilla526->getTabText1(), $vanilla526->getTabImg2(), $vanilla526->getTabText(), $vanilla526->getTabImg3(), $vanilla526->getTabText3(), $vanilla526->getTabImg4(), $vanilla526->getTabText4(), $vanilla526->getTabItem1(), $vanilla526->getTabItem2(), $vanilla526->getTabItem3(), $vanilla526->getTabItem4(), $vanilla526->getCompanyName());
	}
}


?>