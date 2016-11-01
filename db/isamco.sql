-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Sam 03 Janvier 2015 à 17:01
-- Version du serveur: 5.0.51
-- Version de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de données: `isamco`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `article`
-- 

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL auto_increment,
  `title_cn` varchar(255) NOT NULL,
  `title_vi` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_alias` varchar(255) NOT NULL,
  `content_cn` text NOT NULL,
  `content_vi` text NOT NULL,
  `content_en` text NOT NULL,
  `HinhDaiDien` text NOT NULL,
  PRIMARY KEY  (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- 
-- Contenu de la table `article`
-- 

INSERT INTO `article` VALUES (20, '从今天促销期间直到天2014年10月15日的末端。电话订购“买4送1”', 'KHUYẾN MÃI !!!!!! Điện thoại đặt hàng “MUA 4 TẶNG 1”', '', 'khuyen-mai-!!!!!!-dien-thoai-dat-hang-“mua-4-tang-1”', '', 'Thời gian khuyến mại từ ng&agrave;y h&ocirc;m nay đến hết ng&agrave;y 15/10/2014.&nbsp;&nbsp;Điện thoại đặt ngay&nbsp;<strong><span style="color:#ff0000;">&ldquo; MUA 4 TẶNG 1&rdquo;</span></strong><br />\r\n<br />\r\n<div style="text-align: center;">\r\n	<br />\r\n	<br />\r\n	<strong><span style="color:#ff0000;"><img alt="" src="upload/images/45x60-1.jpg" style="height: 400px;" /></span></strong></div>\r\n', '', '');

-- --------------------------------------------------------

-- 
-- Structure de la table `blocks`
-- 

CREATE TABLE `blocks` (
  `block_id` int(11) NOT NULL auto_increment,
  `block_name` varchar(255) NOT NULL,
  `block_content_cn` text NOT NULL,
  `block_content_vi` text NOT NULL,
  `block_content_en` text NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY  (`block_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Contenu de la table `blocks`
-- 

INSERT INTO `blocks` VALUES (2, 'Footer', '版權所有 &copy; 2014 : 宏蒲企業有限公司\r\n<div style="text-align: left">\r\n	<b>越南</b>:&nbsp; 9區富和省，土龍木MOT鎮，平陽省越南<br />\r\n	手機 : +84 0650 384 4114<br />\r\n	傳真:<br />\r\n	熱線: +84 936 169 189<br />\r\n	電子郵件: <a href="mailto:avis_robin@yahoo.com.tw">avis_robin@yahoo.com.tw</a></div>\r\n<div style="text-align: left">\r\n	<b>台灣</b>:&nbsp;台北市台投區文林北路272巷3號2樓<br />\r\n	手機 : +886 2 2764 8905<br />\r\n	傳真: +886 8 8764 8313<br />\r\n	熱線: +886 928 258 249<br />\r\n	電子郵件: <a href="mailto:avis_robin@yahoo.com.tw">avis_robin@yahoo.com.tw</a></div>\r\n', 'Copyright &copy; 2014 : C&Ocirc;NG TY TNHH MTV CHANG KHU&Ocirc;N\r\n<div style="text-align: left">\r\n	<b>VIỆT NAM</b>:&nbsp;KHU 9 PH&Uacute;&nbsp;H&Ograve;A TXTDM TỈNH&nbsp; B&Igrave;NH DƯƠNG , VIỆT NAM<br />\r\n	Điện thoại : +84 0650 384 4114<br />\r\n	Fax :<br />\r\n	Hotline: +84 936 169 189<br />\r\n	Email : <a href="mailto:avis_robin@yahoo.com.tw">avis_robin@yahoo.com.tw</a></div>\r\n<div style="text-align: left">\r\n	<b>TAIWAN</b>:&nbsp;2F.,No.3, Ln.272, Wenlin N. Rd., Beitou Dist., Taipei, Taiwan (R.O.C)<br />\r\n	Điện thoại : +886 2 2764 8905<br />\r\n	Fax : +886 8 8764 8313<br />\r\n	Hotline: +886 928 258 249<br />\r\n	Email : <a href="mailto:avis_robin@yahoo.com.tw">avis_robin@yahoo.com.tw</a></div>\r\n', 'Copyright &copy; 2014 : ROBIN DRIVERS CO.,LTD\r\n<div style="text-align: left">\r\n	<b>VIỆT NAM</b>:&nbsp;KHU 9 PHU HOA TXTDM BD BINH DUONG PROVINCE, VIETNAM<br />\r\n	Tel : +84 0650 384 4114<br />\r\n	Fax :<br />\r\n	Hotline: +84 936 169 189<br />\r\n	Email : <a href="mailto:avis_robin@yahoo.com.tw">avis_robin@yahoo.com.tw</a></div>\r\n<div style="text-align: left">\r\n	<b>TAIWAN</b>:&nbsp;2F.,No.3, Ln.272, Wenlin N. Rd., Beitou Dist., Taipei, Taiwan (R.O.C)<br />\r\n	Tel&nbsp; : +886 2 2764 8905<br />\r\n	Fax : +886 8 8764 8313<br />\r\n	Hotline: +886 928 258 249<br />\r\n	Email : <a href="mailto:avis_robin@yahoo.com.tw">avis_robin@yahoo.com.tw</a></div>\r\n', 1413944713);
INSERT INTO `blocks` VALUES (3, 'Giới thiệu - About us - 介紹', '<p>\r\n	宏蒲企業有限公司在2004年，有感於世界能源危機，便開始致力於塑膠射出成型機省電方面之研究 &mdash; 如何以最便宜的方式，達到最佳省電的效果。</p>\r\n<p style="text-align: justify;">\r\n	經營者依據其20年以上豐厚的射出、維修方面實務工作經驗，利用變頻器將省電效能提升至與最先進的油電混合塑膠射出成型機及伺服塑膠射出成型機一樣，甚至能提升塑膠射出成型機原有的動力，如同汽車有噴射引擎般的衝力。<br />\r\n	我們在越南已深耕8年，我們的服務一本如初。</p>\r\n我們希望與您合作 !\r\n<p>\r\n	&nbsp;</p>\r\n<br />\r\n<img src="common/images/others/battay.jpg" style="margin-left: 150px" /> ', '<table align="center" border="0" cellpadding="1" cellspacing="1" style="font-size: 15px;color: black;" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tổng&nbsp;C&ocirc;ng ty Cơ kh&iacute; Giao th&ocirc;ng Vận tải S&agrave;i G&ograve;n - TNHH MTV<strong>(SAMCO)</strong>&nbsp;l&agrave; doanh nghiệp trực thuộc Ủy ban Nh&acirc;n d&acirc;n TP.HCM, hoạt động theo m&ocirc; h&igrave;nh C&ocirc;ng ty mẹ - Con với 31 đơn vị th&agrave;nh vi&ecirc;n v&agrave; 8.650 lao động. SAMCO l&agrave; thương hiệu được nhận biết trong lĩnh vực cung cấp sản phẩm v&agrave; dịch vụ chất lượng cao trong ng&agrave;nh cơ kh&iacute; giao th&ocirc;ng vận tải, g&oacute;p phần ph&aacute;t triển kinh tế v&agrave; n&acirc;ng cao chất lượng cuộc sống con người Việt Nam.<br />\r\n				<br />\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Th&ocirc;ng tin li&ecirc;n lạc:</u></strong><br />\r\n				<br />\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Địa chỉ: 262 Trần Hưng Đạo, quận 1, TP.HCM<br />\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Điện thoại: 08..9200408;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fax 08.39201876<br />\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;<a href="mailto:samco@samco.com.vn">samco@samco.com.vn</a><br />\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website:&nbsp;<a href="http://www.samco.com.vn/">www.samco.com.vn</a>;&nbsp;&nbsp;<a href="http://www.samco.vn/">www.samco.vn</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>X&iacute; nghiệp C&ocirc;ng Nghiệp v&agrave; Dịch vụ &Ocirc; t&ocirc;</strong>&nbsp;(<strong>ISAMCO</strong>) l&agrave; chi nh&aacute;nh của Tổng C&ocirc;ng ty&nbsp;<strong>SAMCO.</strong>&nbsp;Giấy chứng nhận đăng k&yacute; hoạt động chi nh&aacute;nh do Sở Kế hoạch Đầu tư cấp ng&agrave;y 17/01/2005; Đăng k&yacute; thay đổi lần 7 số 0300481551-007 ng&agrave;y 25/04/2014. X&iacute; nghiệp ISAMCO th&agrave;nh lập v&agrave; hoạt động theo Luật doanh nghiệp của Nước Cộng H&ograve;a X&atilde; Hội Chủ Nghĩa Việt Nam.&nbsp;X&iacute; nghiệp&nbsp;<strong>ISAMCO</strong>hoạt động trong lĩnh vực kinh doanh, sửa chữa &ocirc; t&ocirc;. L&agrave; Đại l&yacute; ủy quyền ch&iacute;nh thức của c&aacute;c H&atilde;ng sản xuất xe &ocirc; t&ocirc; nổi tiếng như Mitsubishi (Vinastar) được đ&aacute;nh gi&aacute; l&agrave; một trong những đơn vị trực thuộc sản xuất kinh doanh hiệu quả nhất của Tổng C&ocirc;ng ty Cơ Kh&iacute; GTVT S&agrave;i G&ograve;n (<strong>SAMCO</strong>).&nbsp;<br />\r\n				<br />\r\n				<strong>ISAMCO</strong>&nbsp;chuy&ecirc;n kinh doanh c&aacute;c loại xe &ocirc; t&ocirc; Mitsubishi du lịch&nbsp;Pajero Sport, Mirage v&agrave;&nbsp;xe b&aacute;n tải Triton. Đặc biệt chuy&ecirc;n nhập khẩu xe cứu thương L300 v&agrave; Pajero với đầy đủ phụ kiện dụng cụ chuy&ecirc;n d&ugrave;ng phục vụ cho ng&agrave;nh y tế. Gắn liền đ&oacute; l&agrave; hoạt động sau b&aacute;n h&agrave;ng với chức năng thực hiện c&aacute;c dịch vụ về bảo tr&igrave;, sửa chữa, đ&oacute;ng th&ugrave;ng xe tải c&aacute;c loại v&agrave; cung cấp phụ t&ugrave;ng ch&iacute;nh phẩm xe &ocirc; t&ocirc;. Ngay từ những ng&agrave;y đầu th&agrave;nh lập, b&ecirc;n cạnh ch&iacute;nh s&aacute;ch chất lượng được thể hiện qua việc duy tr&igrave; thực hiện c&aacute;c ti&ecirc;u chuẩn Đại l&yacute; của c&aacute;c H&atilde;ng,&nbsp;<strong>ISAMCO</strong>&nbsp;đặc biệt ch&uacute; trọng đến c&ocirc;ng t&aacute;c đ&agrave;o tạo chuy&ecirc;n m&ocirc;n nghiệp vụ, nhằm n&acirc;ng cao tay nghề cho kỹ thuật vi&ecirc;n, nh&acirc;n vi&ecirc;n.<br />\r\n				<br />\r\n				<img src="file:///C:DOCUME~1ADMINI~1.000LOCALS~1Tempmsohtml11clip_image001.jpg" /><em>&ldquo;Chất lượng dịch vụ v&agrave; sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng phụ thuộc v&agrave;o t&iacute;nh chuy&ecirc;n nghiệp của CB.CNV&nbsp;</em><strong>ISAMCO</strong><em>, lu&ocirc;n được xem l&agrave; ti&ecirc;u ch&iacute; h&agrave;ng đầu để ph&aacute;t triển năng lực cạnh tranh</em>&rdquo; &ndash; Ban Gi&aacute;m đốc&nbsp;<strong>ISAMCO</strong>&nbsp;khẳng định.<br />\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align: center;">\r\n				&nbsp;<img alt="" height="450" src="img/Xuong%20139.jpg" width="600" /><br />\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nhiều&nbsp;năm liền,&nbsp;<strong>ISAMCO</strong>&nbsp;lu&ocirc;n đạt giải kết quả b&aacute;n h&agrave;ng xuất sắc nhất to&agrave;n quốc. Về dịch vụ,&nbsp;<strong>ISAMCO</strong>&nbsp;được đ&aacute;nh gi&aacute; l&agrave; một trong những Đại l&yacute; đạt giải cao nhất về doanh số b&aacute;n phụ t&ugrave;ng Mitsubishi, Mercedes-Benz v&agrave; lu&ocirc;n đạt giải nhất, nh&igrave; to&agrave;n quốc nhiều năm liền hội thi kỹ thuật vi&ecirc;n sửa chữa xe Mitsubishi. Ngo&agrave;i ra, ch&uacute;ng t&ocirc;i li&ecirc;n kết với c&aacute;c C&ocirc;ng ty Bảo hiểm lớn như Bảo Minh, Bảo Long, Liberty, VIA, Dầu kh&iacute;,&hellip; chuy&ecirc;n sửa chữa đồng sơn xe &ocirc; t&ocirc; với c&ocirc;ng nghệ l&agrave;m đồng t&acirc;n tiến, ph&ograve;ng sơn sấy hiện đại kết hợp với dịch vụ cứu hộ xe tại nạn 24/24.<br />\r\n				<br />\r\n				<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ISAMCO</strong>&nbsp;thường xuy&ecirc;n li&ecirc;n kết với c&aacute;c H&atilde;ng sản xuất &ocirc; t&ocirc; để&nbsp;&nbsp;gửi nh&acirc;n vi&ecirc;n, kỹ sư, kỹ thuật vi&ecirc;n tham dự đ&agrave;o tạo n&acirc;ng cao kỹ năng b&aacute;n h&agrave;ng, kỹ thuật chẩn đo&aacute;n hư hỏng, sửa chữa xe Mitsubishi v&agrave; Mercedes-Benz cao cấp bằng thiết bị chẩn đo&aacute;n hiện đại Diagnosic của Nhật Bản v&agrave; Đức. B&ecirc;n cạnh đ&oacute;,&nbsp;<strong>ISAMCO</strong>kh&ocirc;ng ngừng cải thiện 02 Xưởng dịch vụ (tại Q.1 v&agrave; Thủ Đức), đầu tư th&ecirc;m c&aacute;c trang thiết bị chuy&ecirc;n d&ugrave;ng hiện đại để lu&ocirc;n sẵn s&agrave;ng phục vụ chẩn đo&aacute;n, sửa chữa c&aacute;c d&ograve;ng xe đời mới nhất.&nbsp;<br />\r\n				<br />\r\n				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Đến với&nbsp;<strong>ISAMCO</strong>, kh&aacute;ch h&agrave;ng sẽ thực sự h&agrave;i l&ograve;ng v&igrave; được phục vụ tận t&igrave;nh c&ugrave;ng với c&aacute;c ch&iacute;nh s&aacute;ch ưu đ&atilde;i, nhiều qu&agrave; tặng khi mua xe &ocirc; t&ocirc; Mitsubishi v&agrave; kh&aacute;ch h&agrave;ng ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m trong suốt qu&aacute; tr&igrave;nh sử dụng xe khi bảo tr&igrave; sửa chữa xe tại c&aacute;c Xưởng Dịch vụ đạt ti&ecirc;u chuẩn của ch&uacute;ng t&ocirc;i. &nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	Robin Drives Co., Ltd is established in 2004. We devote ourselves into the Injection Molding Machine research which is how to save power in the cheapest way.</p>\r\n<p style="text-align: justify;">\r\n	The founder has 20 year experience of injection machine and maintenance experience. Based on those experience, we use inverter to improve power saving efficiency just the same as the recent hybrid plastic and bless plastic injection molding machine. It even can raise the power of the plastic injection molding machine just as car with jet engine.<br />\r\n	We&#39;ve been in Vietnam for 8 years. Our service still remains the same as what we started with.</p>\r\nWe wish to cooperate with you !\r\n<p>\r\n	&nbsp;</p>\r\n<br />\r\n<img src="common/images/others/battay.jpg" style="margin-left: 150px" /> ', 1420278835);
INSERT INTO `blocks` VALUES (5, 'Liên hệ - Contact - 聯繫方式', '<div class="contact-info">\r\n	<h3 class="item" style="color:blue;">\r\n		<span style="color:#0189d3; font-size:18px"><span class="name"><span class="value"><strong style="font-size: 18px;color: #0189d3;">越南</strong></span></span></span></h3>\r\n	<div class="item">\r\n		<span class="address"><span class="label"><strong>地址: &nbsp;</strong></span> <span class="value">9區富和省，土龍木MOT鎮，平陽省越南</span></span><br />\r\n		<span class="tel"><span class="label"><strong>手機:</strong></span>&nbsp; &nbsp;<span class="value">+84 0650 384 4114 </span></span><br />\r\n		<span class="tel"><span class="label"><strong>傳真:</strong></span>&nbsp; &nbsp;</span><br />\r\n		<span class="tel"><span class="label"><strong>熱線:</strong></span>&nbsp; &nbsp;<span class="value">+84 936 169 189 </span></span><br />\r\n		<span class="email"><span class="label"><strong>電子郵件:</strong></span> <span class="value"> avis_robin@yahoo.com.tw</span></span></div>\r\n</div>\r\n<div class="map">\r\n	<iframe frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15667.582349436432!2d106.68623680449221!3d10.97125325892552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d0d0399d7217%3A0xc91c93aee4167ef4!2zUGjDuiBIw7JhLCB0cC4gVGjhu6cgROG6p3UgTeG7mXQsIELDrG5oIETGsMahbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1413881579376" style="border:0" width="450"></iframe></div>\r\n<div class="contact-info">\r\n	<h3 class="item" style="color:blue;">\r\n		<span style="color:#0189d3; font-size:18px"><span class="name"><span class="value"><strong style="font-size: 18px;color: #0189d3;">台灣 </strong></span></span></span></h3>\r\n	<div class="item">\r\n		<span class="address"><span class="label"><strong>地址: &nbsp;</strong></span>2F.,No.3, Ln.272, Wenlin N. Rd., Beitou Dist., Taipei, Taiwan (R.O.C)<br />\r\n		<span class="tel"><span class="label"><strong>手機:</strong></span>&nbsp; &nbsp;<span class="value">+886 2 2764 8905&nbsp;&nbsp;<br />\r\n		<span class="tel"><span class="label"><strong>傳真:</strong></span>&nbsp; &nbsp;<span class="value">+886 8 8764 8313</span></span><br />\r\n		<span class="tel"><span class="label"><strong>熱線:</strong></span>&nbsp; &nbsp;<span class="value">+886 928 258 249 </span></span><br />\r\n		<span class="email"><span class="label"><strong>電子郵件:</strong></span> <span class="value"> tratiendao.com@gmail.com</span></span></span></span></span></div>\r\n</div>\r\n<br />\r\n<div class="map">\r\n	<iframe frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3612.7667468086133!2d121.5134285865082!3d25.109755992915247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aeecd0de6627%3A0x59ed86a42bae66e4!2sLane+272%2C+Wenlin+North+Rd%2C+Beitou+District%2C+Taipei+City%2C+%C4%90%C3%A0i+Loan+112!5e0!3m2!1svi!2s!4v1413881716753" style="border:0" width="450"></iframe></div>\r\n', '<div class="contact-info">\r\n	<h3 class="item" style="color:blue;">\r\n		<span style="color:#0189d3; font-size:18px"><span class="name"><span class="value"><strong style="font-size: 18px;color: #0189d3;">VIỆT NAM</strong></span></span></span></h3>\r\n	<div class="item">\r\n		<span class="address"><span class="label"><strong>Địa chỉ: &nbsp;</strong></span> <span class="value">Khu 9 Ph&uacute; Ho&agrave;, TX Thủ Dầu Một, Tỉnh B&igrave;nh Dương, Việt Nam </span></span><br />\r\n		<span class="tel"><span class="label"><strong>Điện thoại:</strong></span>&nbsp; &nbsp;<span class="value">+84 0650 384 4114 </span></span><br />\r\n		<span class="tel"><span class="label"><strong>Fax:</strong></span>&nbsp; &nbsp;</span><br />\r\n		<span class="tel"><span class="label"><strong>Hotline:</strong></span>&nbsp; &nbsp;<span class="value">+84 936 169 189 </span></span><br />\r\n		<span class="email"><span class="label"><strong>Email:</strong></span> <span class="value"> avis_robin@yahoo.com.tw</span></span></div>\r\n</div>\r\n<div class="map">\r\n	<iframe frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15667.582349436432!2d106.68623680449221!3d10.97125325892552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d0d0399d7217%3A0xc91c93aee4167ef4!2zUGjDuiBIw7JhLCB0cC4gVGjhu6cgROG6p3UgTeG7mXQsIELDrG5oIETGsMahbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1413881579376" style="border:0" width="450"></iframe></div>\r\n<div class="contact-info">\r\n	<h3 class="item" style="color:blue;">\r\n		<span style="color:#0189d3; font-size:18px"><span class="name"><span class="value"><strong style="font-size: 18px;color: #0189d3;">Đ&agrave;i Loan </strong></span></span></span></h3>\r\n	<div class="item">\r\n		<span class="address"><span class="label"><strong>Địa chỉ: &nbsp;</strong></span>2F.,No.3, Ln.272, Wenlin N. Rd., Beitou Dist., Taipei, Taiwan (R.O.C)<br />\r\n		<span class="tel"><span class="label"><strong>Điện thoại:</strong></span>&nbsp; &nbsp;<span class="value">+886 2 2764 8905&nbsp;&nbsp;<br />\r\n		<span class="tel"><span class="label"><strong>Fax:</strong></span>&nbsp; &nbsp;<span class="value">+886 8 8764 8313</span></span><br />\r\n		<span class="tel"><span class="label"><strong>Hotline:</strong></span>&nbsp; &nbsp;<span class="value">+886 928 258 249 </span></span><br />\r\n		<span class="email"><span class="label"><strong>Email:</strong></span> <span class="value"> tratiendao.com@gmail.com</span></span></span></span></span></div>\r\n</div>\r\n<br />\r\n<div class="map">\r\n	<iframe frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3612.7667468086133!2d121.5134285865082!3d25.109755992915247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aeecd0de6627%3A0x59ed86a42bae66e4!2sLane+272%2C+Wenlin+North+Rd%2C+Beitou+District%2C+Taipei+City%2C+%C4%90%C3%A0i+Loan+112!5e0!3m2!1svi!2s!4v1413881716753" style="border:0" width="450"></iframe></div>\r\n', '<div class="contact-info">\r\n	<h3 class="item" style="color:blue;">\r\n		<span style="color:#0189d3; font-size:18px"><span class="name"><span class="value"><strong style="font-size: 18px;color: #0189d3;">VIET NAM</strong></span></span></span></h3>\r\n	<div class="item">\r\n		<span class="address"><span class="label"><strong>Địa chỉ: &nbsp;</strong></span> <span class="value">Khu 9 Ph&uacute; Ho&agrave;, TX Thủ Dầu Một, Tỉnh B&igrave;nh Dương, Việt Nam </span></span><br />\r\n		<span class="tel"><span class="label"><strong>Điện thoại:</strong></span>&nbsp; &nbsp;<span class="value">+84 0650 384 4114 </span></span><br />\r\n		<span class="tel"><span class="label"><strong>Fax:</strong></span>&nbsp; &nbsp;</span><br />\r\n		<span class="tel"><span class="label"><strong>Hotline:</strong></span>&nbsp; &nbsp;<span class="value">+84 936 169 189 </span></span><br />\r\n		<span class="email"><span class="label"><strong>Email:</strong></span> <span class="value"> avis_robin@yahoo.com.tw</span></span></div>\r\n</div>\r\n<div class="map">\r\n	<iframe frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15667.582349436432!2d106.68623680449221!3d10.97125325892552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d0d0399d7217%3A0xc91c93aee4167ef4!2zUGjDuiBIw7JhLCB0cC4gVGjhu6cgROG6p3UgTeG7mXQsIELDrG5oIETGsMahbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1413881579376" style="border:0" width="450"></iframe></div>\r\n<div class="contact-info">\r\n	<h3 class="item" style="color:blue;">\r\n		<span style="color:#0189d3; font-size:18px"><span class="name"><span class="value"><strong style="font-size: 18px;color: #0189d3;">TAIWAN </strong></span></span></span></h3>\r\n	<div class="item">\r\n		<span class="address"><span class="label"><strong>Địa chỉ: &nbsp;</strong></span>2F.,No.3, Ln.272, Wenlin N. Rd., Beitou Dist., Taipei, Taiwan (R.O.C)<br />\r\n		<span class="tel"><span class="label"><strong>Điện thoại:</strong></span>&nbsp; &nbsp;<span class="value">+886 2 2764 8905&nbsp;&nbsp;<br />\r\n		<span class="tel"><span class="label"><strong>Fax:</strong></span>&nbsp; &nbsp;<span class="value">+886 8 8764 8313</span></span><br />\r\n		<span class="tel"><span class="label"><strong>Hotline:</strong></span>&nbsp; &nbsp;<span class="value">+886 928 258 249 </span></span><br />\r\n		<span class="email"><span class="label"><strong>Email:</strong></span> <span class="value"> tratiendao.com@gmail.com</span></span></span></span></span></div>\r\n</div>\r\n<br />\r\n<div class="map">\r\n	<iframe frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3612.7667468086133!2d121.5134285865082!3d25.109755992915247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aeecd0de6627%3A0x59ed86a42bae66e4!2sLane+272%2C+Wenlin+North+Rd%2C+Beitou+District%2C+Taipei+City%2C+%C4%90%C3%A0i+Loan+112!5e0!3m2!1svi!2s!4v1413881716753" style="border:0" width="450"></iframe></div>\r\n', 1413882124);
INSERT INTO `blocks` VALUES (11, 'Dịch vụ -  Service - 服務', '<table border="0" cellpadding="0" cellspacing="0" style="color: rgb(69, 69, 69); font-family: Arial; font-size: 13px; letter-spacing: 1px; line-height: 13px; border-collapse: collapse; border-spacing: 0px;" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					1</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					銷售射出機專用變頻器。</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					2</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style=" font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					銷售華嶸塑膠射出成形機。</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					3</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					銷售中古塑膠射出成形機。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					4</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					銷售承泰機械手。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					5</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					銷售塑膠射出成形機的周邊產品。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					6</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					各種品牌塑膠射出成形機保養、整理、維修。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					7</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					機械手整理、維修。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					8</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					節能評估。</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n', '<table border="0" cellpadding="0" cellspacing="0" style="color: rgb(69, 69, 69); font-family: Arial; font-size: 13px; letter-spacing: 1px; line-height: 13px; border-collapse: collapse; border-spacing: 0px;" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					1</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					B&aacute;n m&aacute;y &eacute;p phun biến tần đặc biệt.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					2</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style=" font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					B&aacute;n h&agrave;ng Huarong nhựa M&aacute;y &eacute;p phun.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					3</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					B&aacute;n m&aacute;y &eacute;p phun nhựa Trung.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					4</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					B&aacute;n h&agrave;ng,đặt h&agrave;ng m&aacute;y Robot Th&aacute;i.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					5</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Doanh số b&aacute;n h&agrave;ng của m&aacute;y &eacute;p phun nhựa sản phẩm ngoại vi.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					6</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Thương hiệu kh&aacute;c nhau của nhựa bảo tr&igrave; m&aacute;y &eacute;p phun, ho&agrave;n thiện v&agrave; bảo tr&igrave;.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					7</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Ho&agrave;n thiện robot, bảo tr&igrave;.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					8</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Đ&aacute;nh gi&aacute; năng lượng.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n', '<table border="0" cellpadding="0" cellspacing="0" style="color: rgb(69, 69, 69); font-family: Arial; font-size: 13px; letter-spacing: 1px; line-height: 13px; border-collapse: collapse; border-spacing: 0px;" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					1</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Sell ​​injection molding machine special inverter.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					2</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style=" font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Huarong Plastic Machinery Sales injection.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					3</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Sell ​​plastic injection molding machine China.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					4</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Sales, order Thai Robot.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					5</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Sales of plastic injection molding machine peripheral products.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					6</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Different brands of plastic injection molding machine maintenance, finishing and maintenance.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					7</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Completing the robot maintenance.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="">\r\n				<p style="margin: -10px 0px 0px; padding: 0px 15px 0px 4px; list-style: none; color: #0189d3; font-size: 30px; font-weight: bold; line-height: 0.1;">\r\n					8</p>\r\n			</td>\r\n			<td style="margin: 0px; padding: 0px; list-style: none;" valign="top">\r\n				<p style="font-weight: bold; margin: 0px 0px 20px; padding: 0px; list-style: none;  line-height: 1.9;">\r\n					Energy rating.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n', 1413883106);

-- --------------------------------------------------------

-- 
-- Structure de la table `category`
-- 

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL auto_increment,
  `cate_name_cn` varchar(255) NOT NULL,
  `cate_name_vi` varchar(255) NOT NULL,
  `cate_name_en` varchar(255) NOT NULL,
  `cate_alias` varchar(255) NOT NULL,
  `idTL` int(10) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY  (`cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Contenu de la table `category`
-- 

INSERT INTO `category` VALUES (1, '變頻器 DM上的相片', 'Máy Biến Tần', 'Machine Inverter', 'machine-inverter', 0, '變頻器 DM上的相片', '變頻器 DM上的相片', '變頻器 DM上的相片', 1412050274);
INSERT INTO `category` VALUES (2, '射出機 台灣華嶸射出機', 'Máy ép Phun', 'Injection molding machine', 'injection-molding-machine', 0, '射出機 台灣華嶸射出機', '射出機 台灣華嶸射出機', '射出機 台灣華嶸射出機', 1413883313);
INSERT INTO `category` VALUES (3, '機械手', 'Robot', 'Robot', 'robot', 0, 'Robot', 'Robot', 'Robot', 1412050372);

-- --------------------------------------------------------

-- 
-- Structure de la table `donhang`
-- 

CREATE TABLE `donhang` (
  `idDH` int(20) NOT NULL auto_increment,
  `idKH` int(11) NOT NULL,
  `tongtiendh` int(11) NOT NULL,
  `tongsp` int(11) NOT NULL,
  `ngaymua` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`idDH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Contenu de la table `donhang`
-- 


-- --------------------------------------------------------

-- 
-- Structure de la table `donhangct`
-- 

CREATE TABLE `donhangct` (
  `idDHCT` int(11) NOT NULL auto_increment,
  `idDH` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tiensp` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  PRIMARY KEY  (`idDHCT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Contenu de la table `donhangct`
-- 


-- --------------------------------------------------------

-- 
-- Structure de la table `duan`
-- 

CREATE TABLE `duan` (
  `idDuAn` tinyint(20) NOT NULL auto_increment,
  `cate_id` tinyint(20) NOT NULL,
  `TenDuAn_cn` text collate utf8_unicode_ci NOT NULL,
  `TenDuAn_vi` text collate utf8_unicode_ci NOT NULL,
  `TenDuAn_en` text collate utf8_unicode_ci NOT NULL,
  `title_alias` varchar(255) collate utf8_unicode_ci NOT NULL,
  `HinhDaiDien` varchar(255) collate utf8_unicode_ci NOT NULL,
  `NoiDung_cn` text collate utf8_unicode_ci NOT NULL,
  `NoiDung_vi` text collate utf8_unicode_ci NOT NULL,
  `NoiDung_en` text collate utf8_unicode_ci NOT NULL,
  `idQuocGia` tinyint(20) NOT NULL,
  `idKhuVuc` tinyint(20) NOT NULL,
  PRIMARY KEY  (`idDuAn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `duan`
-- 

INSERT INTO `duan` VALUES (1, 1, '菲律賓八年前變頻南嶸機', 'Lắp đặt máy Biến Tần ở Philippin cách đây 8 năm', 'Philippines eight years ago frequency Nan Rong machine', 'lap-dat-may-bien-tan-o-philippin-cach-day-8-nam', 'upload/images/congtrinh_Philippin.jpg', '', '', '', 2, 1);
INSERT INTO `duan` VALUES (2, 2, 'test', 'test', 'test', 'test', 'upload/images/2.png', 'test', 'test', 'test', 2, 1);

-- --------------------------------------------------------

-- 
-- Structure de la table `hinhanh_home`
-- 

CREATE TABLE `hinhanh_home` (
  `idHinh` int(20) NOT NULL auto_increment,
  `Url` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`idHinh`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

-- 
-- Contenu de la table `hinhanh_home`
-- 

INSERT INTO `hinhanh_home` VALUES (8, '../upload/images/slide2.PNG');
INSERT INTO `hinhanh_home` VALUES (9, '../upload/images/slide3.PNG');
INSERT INTO `hinhanh_home` VALUES (10, '../upload/images/slide4.PNG');
INSERT INTO `hinhanh_home` VALUES (11, '../upload/images/slide5.PNG');
INSERT INTO `hinhanh_home` VALUES (7, '../upload/images/slide1.PNG');
INSERT INTO `hinhanh_home` VALUES (12, '../upload/images/slide6.PNG');

-- --------------------------------------------------------

-- 
-- Structure de la table `khachhang`
-- 

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL auto_increment,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(12) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tongtien` int(30) NOT NULL,
  `lanmuacuoi` int(11) NOT NULL,
  `solanmua` int(11) NOT NULL,
  PRIMARY KEY  (`idKH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Contenu de la table `khachhang`
-- 


-- --------------------------------------------------------

-- 
-- Structure de la table `khuvucduan`
-- 

CREATE TABLE `khuvucduan` (
  `idKhuVuc` tinyint(20) NOT NULL auto_increment,
  `TenKhuVuc_cn` varchar(255) collate utf8_unicode_ci NOT NULL,
  `TenKhuVuc_vi` varchar(255) collate utf8_unicode_ci NOT NULL,
  `TenKhuVuc_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `idQuocGia` tinyint(20) NOT NULL,
  PRIMARY KEY  (`idKhuVuc`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `khuvucduan`
-- 

INSERT INTO `khuvucduan` VALUES (1, '平陽地區', 'Bình Dương', 'Binh Duong', 2);
INSERT INTO `khuvucduan` VALUES (2, '龍安地區', 'Long An', 'Long An', 2);

-- --------------------------------------------------------

-- 
-- Structure de la table `menu`
-- 

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL auto_increment,
  `menu` varchar(255) NOT NULL,
  `menu_alias` varchar(255) NOT NULL,
  `article_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `update_time` int(11) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  PRIMARY KEY  (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- Contenu de la table `menu`
-- 

INSERT INTO `menu` VALUES (2, 'Giới thiệu', 'gioi-thieu', 1, 1, 1378853240, 'Giới thiệu', 'Giới thiệu', 'Giới thiệu');
INSERT INTO `menu` VALUES (3, 'Dịch vụ', 'dich-vu', 2, 1, 1378853295, 'Dịch vụ', 'Dịch vụ', 'Dịch vụ');
INSERT INTO `menu` VALUES (4, 'Khuyến mãi', 'khuyen-mai', 3, 1, 1378853277, 'Khuyến mãi', 'Khuyến mãi', 'Khuyến mãi');
INSERT INTO `menu` VALUES (5, 'Hỗ trợ - tư vấn', 'ho-tro-tu-van', 4, 1, 1378853290, 'Hỗ trợ - tư vấn', 'Hỗ trợ - tư vấn', 'Hỗ trợ - tư vấn');

-- --------------------------------------------------------

-- 
-- Structure de la table `product`
-- 

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL auto_increment,
  `product_name_cn` varchar(255) NOT NULL,
  `product_name_vi` varchar(255) NOT NULL,
  `product_name_en` varchar(255) NOT NULL,
  `product_alias` varchar(255) NOT NULL,
  `price_small` varchar(20) NOT NULL,
  `price_big` varchar(20) NOT NULL,
  `url_images` varchar(255) NOT NULL,
  `content_cn` text NOT NULL,
  `content_vi` text NOT NULL,
  `content_en` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `idTL` int(50) NOT NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Contenu de la table `product`
-- 

INSERT INTO `product` VALUES (2, '伺服油電射出成形機(HR-FC規格表)', 'Dầu Servo tiêm điện máy ép (HR-FC tấm spec)', 'Servo oil electric injection molding machine (HR-FC spec sheet)', 'dau-servo-tiem-dien-may-ep-hr-fc-tam-spec', '', '', 'upload/images/HR%20-%20F.jpg', '', '', '', '2', 0);
INSERT INTO `product` VALUES (3, '傳統射出成形機 (HR-N規格表)', 'Máy ép phun thông thường (HR-N tờ đặc điểm kỹ thuật)', 'Conventional injection molding machine (HR-N specification sheet)', 'may-ep-phun-thong-thuong-hr-n-to-dac-diem-ky-thuat', '', '', 'upload/images/HR-N.jpg', '', '', '', '2', 0);
INSERT INTO `product` VALUES (4, '變頻器 DM上的相片', 'Máy Biến Tần', 'Machine Inverter', 'may-bien-tan', '', '', 'upload/images/2.png', '', '<div>\r\n	Đầy đủ điều khiển thời đại A / C đang đến, l&agrave; m&aacute;y &eacute;p phun của bạn đ&atilde; sẵn s&agrave;ng cho một sự thay đổi? Để đ&aacute;p ứng sự ph&aacute;t triển của nhu cầu ng&agrave;nh c&ocirc;ng nghiệp ng&agrave;y nay, kh&ocirc;ng kh&iacute; th&ecirc;m hệ thống điều khiển để đạt được c&aacute;c chi ph&iacute; v&agrave; hiệu quả, giảm tiếng ồn cực đoan, v&agrave; hầu hết tất cả, tiết kiệm năng lượng.&nbsp;</div>\r\n<div>\r\n	Hệ thống điều khiển Robin A / C cung cấp cho bạn một m&ocirc;i trường l&agrave;m việc thoải m&aacute;i hơn v&agrave; tối đa h&oacute;a hiệu quả của tiết kiệm điện.</div>\r\n', '', '1', 0);

-- --------------------------------------------------------

-- 
-- Structure de la table `quocgia`
-- 

CREATE TABLE `quocgia` (
  `idQuocGia` tinyint(20) NOT NULL auto_increment,
  `TenQuocGia_cn` varchar(255) collate utf8_unicode_ci NOT NULL,
  `TenQuocGia_vi` varchar(255) collate utf8_unicode_ci NOT NULL,
  `TenQuocGia_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`idQuocGia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `quocgia`
-- 

INSERT INTO `quocgia` VALUES (1, '菲律賓', 'Philippin', 'Philippin');
INSERT INTO `quocgia` VALUES (2, '越南', 'Việt Nam', 'Viet Nam');

-- --------------------------------------------------------

-- 
-- Structure de la table `theloai`
-- 

CREATE TABLE `theloai` (
  `idTL` int(10) NOT NULL auto_increment,
  `TenTL_cn` text collate utf8_unicode_ci NOT NULL,
  `TenTL_vi` text collate utf8_unicode_ci NOT NULL,
  `TenTL_en` text collate utf8_unicode_ci NOT NULL,
  `TenTL_KhongDau` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`idTL`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

-- 
-- Contenu de la table `theloai`
-- 

INSERT INTO `theloai` VALUES (11, '西哈奇', 'Thạch', '', '');
INSERT INTO `theloai` VALUES (10, '馅饼', 'Bánh flan', '', '');

-- --------------------------------------------------------

-- 
-- Structure de la table `user`
-- 

CREATE TABLE `user` (
  `id` int(10) NOT NULL auto_increment,
  `Pass` text collate utf8_unicode_ci NOT NULL,
  `User` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Contenu de la table `user`
-- 

INSERT INTO `user` VALUES (1, '0192023a7bbd73250516f069df18b500', 'admin');
