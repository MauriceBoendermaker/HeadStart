<?php

namespace database;

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


class Vanilla526
{
	private $id;
	private $title;
	private $seo_lang;
	private $seo_title;
	private $seo_author;
	private $seo_copy;
	private $seo_desc;
	private $seo_keywords;
	private $seo_url;
	private $seo_image;
	private $navitem1;
	private $navitem2;
	private $navitem3;
	private $navitem4;
	private $navitem5;
	private $headline;
	private $strongsubheadline;
	private $subheadline;
	private $headerctabtn;
	private $p2header;
	private $p2headertext;
	private $p2headerlistitem1;
	private $p2headerlistitem2;
	private $p2headerlistitem3;
	private $p2headerlistitem4;
	private $p2headerctabtn;
	private $p2boxtitle1;
	private $p2boxtext1;
	private $p2boxtitle2;
	private $p2boxtext2;
	private $p2boxtitle3;
	private $p2boxtext3;
	private $p2boxtitle4;
	private $p2boxtext4;
	private $carouselimg1;
	private $carouseltext1;
	private $carouselsub1;
	private $carouselimg2;
	private $carouseltext2;
	private $carouselsub2;
	private $carouselimg3;
	private $carouseltext3;
	private $carouselsub3;
	private $carouselimg4;
	private $carouseltext4;
	private $carouselsub4;
	private $carouselimg5;
	private $carouseltext5;
	private $carouselsub5;
	private $carouselimg6;
	private $carouseltext6;
	private $carouselsub6;
	private $carouselimg7;
	private $carouseltext7;
	private $carouselsub7;
	private $carouselimg8;
	private $carouseltext8;
	private $carouselsub8;
	private $tabimg1;
	private $tabtext1;
	private $tabimg2;
	private $tabtext2;
	private $tabimg3;
	private $tabtext3;
	private $tabimg4;
	private $tabtext4;
	private $tabitem1;
	private $tabitem2;
	private $tabitem3;
	private $tabitem4;
	private $companyname;

	public function __construct($id, $title, $seo_lang, $seo_title, $seo_author, $seo_copy, $seo_desc, $seo_keywords, $seo_url, $seo_image, $navitem1, $navitem2, $navitem3, $navitem4, $navitem5, $headline, $strongsubheadline, $subheadline, $headerctabtn, $p2header, $p2headertext, $p2headerlistitem1, $p2headerlistitem2, $p2headerlistitem3, $p2headerlistitem4, $p2headerctabtn, $p2boxtitle1, $p2boxtext1, $p2boxtitle2, $p2boxtext2, $p2boxtitle3, $p2boxtext3, $p2boxtitle4, $p2boxtext4, $carouselimg1, $carouseltext1, $carouselsub1, $carouselimg2, $carouseltext2, $carouselsub2, $carouselimg3, $carouseltext3, $carouselsub3, $carouselimg4, $carouseltext4, $carouselsub4, $carouselimg5, $carouseltext5, $carouselsub5, $carouselimg6, $carouseltext6, $carouselsub6, $carouselimg7, $carouseltext7, $carouselsub7, $carouselimg8, $carouseltext8, $carouselsub8, $tabimg1, $tabtext1, $tabimg2, $tabtext2, $tabimg3, $tabtext3, $tabimg4, $tabtext4, $tabitem1, $tabitem2, $tabitem3, $tabitem4, $companyname)
	{
		$this->id = $id;
		$this->title = $title;
		$this->seo_lang = $seo_lang;
		$this->seo_title = $seo_title;
		$this->seo_author = $seo_author;
		$this->seo_copy = $seo_copy;
		$this->seo_desc = $seo_desc;
		$this->seo_keywords = $seo_keywords;
		$this->seo_url = $seo_url;
		$this->seo_image = $seo_image;
		$this->navitem1 = $navitem1;
		$this->navitem2 = $navitem2;
		$this->navitem3 = $navitem3;
		$this->navitem4 = $navitem4;
		$this->navitem5 = $navitem5;
		$this->headline = $headline;
		$this->strongsubheadline = $strongsubheadline;
		$this->subheadline = $subheadline;
		$this->headerctabtn = $headerctabtn;
		$this->p2header = $p2header;
		$this->p2headertext = $p2headertext;
		$this->p2headerlistitem1 = $p2headerlistitem1;
		$this->p2headerlistitem2 = $p2headerlistitem2;
		$this->p2headerlistitem3 = $p2headerlistitem3;
		$this->p2headerlistitem4 = $p2headerlistitem4;
		$this->p2headerctabtn = $p2headerctabtn;
		$this->p2boxtitle1 = $p2boxtitle1;
		$this->p2boxtext1 = $p2boxtext1;
		$this->p2boxtitle2 = $p2boxtitle2;
		$this->p2boxtext2 = $p2boxtext2;
		$this->p2boxtitle3 = $p2boxtitle3;
		$this->p2boxtext3 = $p2boxtext3;
		$this->p2boxtitle4 = $p2boxtitle4;
		$this->p2boxtext4 = $p2boxtext4;
		$this->carouselimg1 = $carouselimg1;
		$this->carouseltext1 = $carouseltext1;
		$this->carouselsub1 = $carouselsub1;
		$this->carouselimg2 = $carouselimg2;
		$this->carouseltext2 = $carouseltext2;
		$this->carouselsub2 = $carouselsub2;
		$this->carouselimg3 = $carouselimg3;
		$this->carouseltext3 = $carouseltext3;
		$this->carouselsub3 = $carouselsub3;
		$this->carouselimg4 = $carouselimg4;
		$this->carouseltext4 = $carouseltext4;
		$this->carouselsub4 = $carouselsub4;
		$this->carouselimg5 = $carouselimg5;
		$this->carouseltext5 = $carouseltext5;
		$this->carouselsub5 = $carouselsub5;
		$this->carouselimg6 = $carouselimg6;
		$this->carouseltext6 = $carouseltext6;
		$this->carouselsub6 = $carouselsub6;
		$this->carouselimg7 = $carouselimg7;
		$this->carouseltext7 = $carouseltext7;
		$this->carouselsub7 = $carouselsub7;
		$this->carouselimg8 = $carouselimg8;
		$this->carouseltext8 = $carouseltext8;
		$this->carouselsub8 = $carouselsub8;
		$this->tabimg1 = $tabimg1;
		$this->tabtext1 = $tabtext1;
		$this->tabimg2 = $tabimg2;
		$this->tabtext2 = $tabtext2;
		$this->tabimg3 = $tabimg3;
		$this->tabtext3 = $tabtext3;
		$this->tabimg4 = $tabimg4;
		$this->tabtext4 = $tabtext4;
		$this->tabitem1 = $tabitem1;
		$this->tabitem2 = $tabitem2;
		$this->tabitem3 = $tabitem3;
		$this->tabitem4 = $tabitem4;
		$this->companyname = $companyname;
	}

	// ID INT

	// title VARCHAR(80)

	public function getID()
	{
		return $this->id;
	}

	public function setID($id)
	{
		$this->id = $id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	// seo_lang VARCHAR(5)
	// seo_title VARCHAR(100)
	// seo_author VARCHAR(50)
	// seo_copy VARCHAR(50)
	// seo_desc VARCHAR(250)
	// seo_keywords VARCHAR(250)
	// seo_url VARCHAR(250)
	// seo_image VARCHAR(250)

	public function getSeoLang()
	{
		return $this->seo_lang;
	}

	public function setSeoLang($seo_lang)
	{
		$this->seo_lang = $seo_lang;
	}

	public function getSeoTitle()
	{
		return $this->seo_title;
	}

	public function setSeoTitle($seo_title)
	{
		$this->seo_title = $seo_title;
	}

	public function getSeoAuthor()
	{
		return $this->seo_author;
	}

	public function setSeoAuthor($seo_author)
	{
		$this->seo_author = $seo_author;
	}

	public function getSeoCopy()
	{
		return $this->seo_copy;
	}

	public function setSeoCopy($seo_copy)
	{
		$this->seo_copy = $seo_copy;
	}

	public function getSeoDesc()
	{
		return $this->seo_desc;
	}

	public function setSeoDesc($seo_desc)
	{
		$this->seo_desc = $seo_desc;
	}

	public function getSeoKeywords()
	{
		return $this->seo_keywords;
	}

	public function setSeoKeywords($seo_keywords)
	{
		$this->seo_keywords = $seo_keywords;
	}

	public function getSeoUrl()
	{
		return $this->seo_url;
	}

	public function setSeoUrl($seo_url)
	{
		$this->seo_url = $seo_url;
	}

	public function getSeoImage()
	{
		return $this->seo_image;
	}

	public function setSeoImage($seo_image)
	{
		$this->seo_image = $seo_image;
	}

	// NavItem1 VARCHAR(25)
	// NavItem2 VARCHAR(25)
	// NavItem3 VARCHAR(25)
	// NavItem4 VARCHAR(25)
	// NavItem5 VARCHAR(25)

	public function getNavItem1()
	{
		return $this->navitem1;
	}

	public function setNavItem1($nav_item1)
	{
		$this->navitem1 = $nav_item1;
	}

	public function getNavItem2()
	{
		return $this->navitem2;
	}

	public function setNavItem2($nav_item2)
	{
		$this->navitem2 = $nav_item2;
	}

	public function getNavItem3()
	{
		return $this->navitem3;
	}

	public function setNavItem3($nav_item3)
	{
		$this->navitem3 = $nav_item3;
	}

	public function getNavItem4()
	{
		return $this->navitem4;
	}

	public function setNavItem4($nav_item4)
	{
		$this->navitem4 = $nav_item4;
	}

	public function getNavItem5()
	{
		return $this->navitem5;
	}

	public function setNavItem5($nav_item5)
	{
		$this->navitem5 = $nav_item5;
	}

	public function getStrongSubHeadline()
	{
		return $this->strongsubheadline;
	}

	public function setStrongSubHeadline($strongsubheadline)
	{
		$this->strongsubheadline = $strongsubheadline;
	}

	// Headline VARCHAR(50)
	// StrongSubHeadline VARCHAR(50)
	// SubHeadline VARCHAR(50)
	// HeaderCtaBtn VARCHAR(25)

	public function getHeadline()
	{
		return $this->headline;
	}

	public function setHeadline($headline)
	{
		$this->headline = $headline;
	}

	public function getSubHeadline()
	{
		return $this->subheadline;
	}

	public function setSubHeadline($subheadline)
	{
		$this->subheadline = $subheadline;
	}

	public function getHeaderCtaBtn()
	{
		return $this->headerctabtn;
	}

	public function setHeaderCtaBtn($headercbtn)
	{
		$this->headerctabtn = $headercbtn;
	}

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

	public function getP2Header()
	{
		return $this->p2header;
	}

	public function setP2Header($p2header)
	{
		$this->p2header = $p2header;
	}

	public function getP2HeaderText()
	{
		return $this->p2headertext;
	}

	public function setP2HeaderText($p2headertext)
	{
		$this->p2headertext = $p2headertext;
	}

	public function getP2HeaderListItem1()
	{
		return $this->p2headerlistitem1;
	}

	public function setP2HeaderListItem1($p2headerlistitem1)
	{
		$this->p2headerlistitem1 = $p2headerlistitem1;
	}

	public function getP2HeaderListItem2()
	{
		return $this->p2headerlistitem2;
	}

	public function setP2HeaderListItem2($p2headerlistitem2)
	{
		$this->p2headerlistitem2 = $p2headerlistitem2;
	}

	public function getP2HeaderListItem3()
	{
		return $this->p2headerlistitem3;
	}

	public function setP2HeaderListItem3($p2headerlistitem3)
	{
		$this->p2headerlistitem3 = $p2headerlistitem3;
	}

	public function getP2HeaderListItem4()
	{
		return $this->p2headerlistitem4;
	}

	public function setP2HeaderListItem4($p2headerlistitem4)
	{
		$this->p2headerlistitem4 = $p2headerlistitem4;
	}

	public function getP2HeaderCtaBtn()
	{
		return $this->p2headerctabtn;
	}

	public function setP2HeaderCtaBtn($p2headercbtn)
	{
		$this->p2headerctabtn = $p2headercbtn;
	}

	public function getP2BoxTitle1()
	{
		return $this->p2boxtitle1;
	}

	public function setP2BoxTitle1($p2boxtitle1)
	{
		$this->p2boxtitle1 = $p2boxtitle1;
	}

	public function getP2BoxText1()
	{
		return $this->p2boxtext1;
	}

	public function setP2BoxText1($p2boxtext1)
	{
		$this->p2boxtext1 = $p2boxtext1;
	}

	public function getP2BoxTitle2()
	{
		return $this->p2boxtitle2;
	}

	public function setP2BoxTitle2($p2boxtitle2)
	{
		$this->p2boxtitle2 = $p2boxtitle2;
	}

	public function getP2BoxText2()
	{
		return $this->p2boxtext2;
	}

	public function setP2BoxText2($p2boxtext2)
	{
		$this->p2boxtext2 = $p2boxtext2;
	}

	public function getP2BoxTitle3()
	{
		return $this->p2boxtitle3;
	}

	public function setP2BoxTitle3($p2boxtitle3)
	{
		$this->p2boxtitle3 = $p2boxtitle3;
	}

	public function getP2BoxText3()
	{
		return $this->p2boxtext3;
	}

	public function setP2BoxText3($p2boxtext3)
	{
		$this->p2boxtext3 = $p2boxtext3;
	}

	public function getP2BoxTitle4()
	{
		return $this->p2boxtitle4;
	}

	public function setP2BoxTitle4($p2boxtitle4)
	{
		$this->p2boxtitle4 = $p2boxtitle4;
	}

	public function getP2BoxText4()
	{
		return $this->p2boxtext4;
	}

	public function setP2BoxText4($p2boxtext4)
	{
		$this->p2boxtext4 = $p2boxtext4;
	}

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

	public function getCarouselImg1()
	{
		return $this->carouselimg1;
	}

	public function setCarouselImg1($carouselimg1)
	{
		$this->carouselimg1 = $carouselimg1;
	}

	public function getCarouselText1()
	{
		return $this->carouseltext1;
	}

	public function setCarouselText1($carouseltext1)
	{
		$this->carouseltext1 = $carouseltext1;
	}

	public function getCarouselSub1()
	{
		return $this->carouselsub1;
	}

	public function setCarouselSub1($carouselsub1)
	{
		$this->carouselsub1 = $carouselsub1;
	}

	public function getCarouselImg2()
	{
		return $this->carouselimg2;
	}

	public function setCarouselImg2($carouselimg2)
	{
		$this->carouselimg2 = $carouselimg2;
	}

	public function getCarouselText2()
	{
		return $this->carouseltext2;
	}

	public function setCarouselText2($carouseltext2)
	{
		$this->carouseltext2 = $carouseltext2;
	}

	public function getCarouselSub2()
	{
		return $this->carouselsub2;
	}

	public function setCarouselSub2($carouselsub2)
	{
		$this->carouselsub2 = $carouselsub2;
	}

	public function getCarouselImg3()
	{
		return $this->carouselimg3;
	}

	public function setCarouselImg3($carouselimg3)
	{
		$this->carouselimg3 = $carouselimg3;
	}

	public function getCarouselText3()
	{
		return $this->carouseltext3;
	}

	public function setCarouselText3($carouseltext3)
	{
		$this->carouseltext3 = $carouseltext3;
	}

	public function getCarouselSub3()
	{
		return $this->carouselsub3;
	}

	public function setCarouselSub3($carouselsub3)
	{
		$this->carouselsub3 = $carouselsub3;
	}

	public function getCarouselImg4()
	{
		return $this->carouselimg4;
	}

	public function setCarouselImg4($carouselimg4)
	{
		$this->carouselimg4 = $carouselimg4;
	}

	public function getCarouselText4()
	{
		return $this->carouseltext4;
	}

	public function setCarouselText4($carouseltext4)
	{
		$this->carouseltext4 = $carouseltext4;
	}

	public function getCarouselSub4()
	{
		return $this->carouselsub4;
	}

	public function setCarouselSub4($carouselsub4)
	{
		$this->carouselsub4 = $carouselsub4;
	}

	public function getCarouselImg5()
	{
		return $this->carouselimg5;
	}

	public function setCarouselImg5($carouselimg5)
	{
		$this->carouselimg5 = $carouselimg5;
	}

	public function getCarouselText5()
	{
		return $this->carouseltext5;
	}

	public function setCarouselText5($carouseltext5)
	{
		$this->carouseltext5 = $carouseltext5;
	}

	public function getCarouselSub5()
	{
		return $this->carouselsub5;
	}

	public function setCarouselSub5($carouselsub5)
	{
		$this->carouselsub5 = $carouselsub5;
	}

	public function getCarouselImg6()
	{
		return $this->carouselimg6;
	}

	public function setCarouselImg6($carouselimg6)
	{
		$this->carouselimg6 = $carouselimg6;
	}

	public function getCarouselText6()
	{
		return $this->carouseltext6;
	}

	public function setCarouselText6($carouseltext6)
	{
		$this->carouseltext6 = $carouseltext6;
	}

	public function getCarouselSub6()
	{
		return $this->carouselsub6;
	}

	public function setCarouselSub6($carouselsub6)
	{
		$this->carouselsub6 = $carouselsub6;
	}

	public function getCarouselImg7()
	{
		return $this->carouselimg7;
	}

	public function setCarouselImg7($carouselimg7)
	{
		$this->carouselimg7 = $carouselimg7;
	}

	public function getCarouselText7()
	{
		return $this->carouseltext7;
	}

	public function setCarouselText7($carouseltext7)
	{
		$this->carouseltext7 = $carouseltext7;
	}

	public function getCarouselSub7()
	{
		return $this->carouselsub7;
	}

	public function setCarouselSub7($carouselsub7)
	{
		$this->carouselsub7 = $carouselsub7;
	}

	public function getCarouselImg8()
	{
		return $this->carouselimg8;
	}

	public function setCarouselImg8($carouselimg8)
	{
		$this->carouselimg8 = $carouselimg8;
	}

	public function getCarouselText8()
	{
		return $this->carouseltext8;
	}

	public function setCarouselText8($carouseltext8)
	{
		$this->carouseltext8 = $carouseltext8;
	}

	public function getCarouselSub8()
	{
		return $this->carouselsub8;
	}

	public function setCarouselSub8($carouselsub8)
	{
		$this->carouselsub8 = $carouselsub8;
	}

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

	public function getTabImg1()
	{
		return $this->tabimg1;
	}

	public function setTabImg1($tabimg1)
	{
		$this->tabimg1 = $tabimg1;
	}

	public function getTabText1()
	{
		return $this->tabtext1;
	}

	public function setTabText1($tabtext1)
	{
		$this->tabtext1 = $tabtext1;
	}

	public function getTabImg2()
	{
		return $this->tabimg2;
	}

	public function setTabImg2($tabimg2)
	{
		$this->tabimg2 = $tabimg2;
	}

	public function getTabText2()
	{
		return $this->tabtext2;
	}

	public function setTabText2($tabtext2)
	{
		$this->tabtext2 = $tabtext2;
	}

	public function getTabImg3()
	{
		return $this->tabimg3;
	}

	public function setTabImg3($tabimg3)
	{
		$this->tabimg3 = $tabimg3;
	}

	public function getTabText3()
	{
		return $this->tabtext3;
	}

	public function setTabText3($tabtext3)
	{
		$this->tabtext3 = $tabtext3;
	}

	public function getTabImg4()
	{
		return $this->tabimg4;
	}

	public function setTabImg4($tabimg4)
	{
		$this->tabimg4 = $tabimg4;
	}

	public function getTabText4()
	{
		return $this->tabtext4;
	}

	public function setTabText4($tabtext4)
	{
		$this->tabtext4 = $tabtext4;
	}

	public function getTabItem1()
	{
		return $this->tabitem1;
	}

	public function setTabItem1($tabitem1)
	{
		$this->tabitem1 = $tabitem1;
	}

	public function getTabItem2()
	{
		return $this->tabitem2;
	}

	public function setTabItem2($tabitem2)
	{
		$this->tabitem2 = $tabitem2;
	}

	public function getTabItem3()
	{
		return $this->tabitem3;
	}

	public function setTabItem3($tabitem3)
	{
		$this->tabitem3 = $tabitem3;
	}

	public function getTabItem4()
	{
		return $this->tabitem4;
	}

	public function setTabItem4($tabitem4)
	{
		$this->tabitem4 = $tabitem4;
	}

	// CompanyName VARCHAR(50)

	public function getCompanyName()
	{
		return $this->companyname;
	}

	public function setCompanyName($companyname)
	{
		$this->companyname = $companyname;
	}
}