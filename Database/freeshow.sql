-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-23 18:49:22
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeshow`
--

-- --------------------------------------------------------

--
-- 表的结构 `fs_admin`
--

CREATE TABLE `fs_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `fs_admin`
--

INSERT INTO `fs_admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'lipeng', 'cs-9F40G0v4jCVHWfH-mQx4EqvvUHfaN', '$2y$13$ROv9/7Os.YDTqVbqRbYDVeonyUj.8UZXBwxUfHAnLaBbJH7IutjEm', NULL, 'lipengblee@qq.com', 10, 1471341263, 1471341263),
(5, 'lipeng1', 'Qwcf8fhYyzfS6v4vIgCBpARTGbypKHsn', '$2y$13$2S/rr7UMggoUNu9kx5ZOy.kLnAGPGEyEPygxdJyAwy5OTWkhAMZCi', NULL, 'lipengblee1@qq.com', 10, 1471342415, 1471342415);

-- --------------------------------------------------------

--
-- 表的结构 `fs_migration`
--

CREATE TABLE `fs_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fs_migration`
--

INSERT INTO `fs_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1471338784),
('m130524_201442_init', 1471338790);

-- --------------------------------------------------------

--
-- 表的结构 `fs_products`
--

CREATE TABLE `fs_products` (
  `product_id` int(11) NOT NULL COMMENT '产品ID',
  `product_name` varchar(200) NOT NULL COMMENT '产品名称',
  `product_description` text NOT NULL COMMENT '产品描述',
  `contact` varchar(30) NOT NULL COMMENT '联系方式',
  `thumbnail` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `begin_time` varchar(20) NOT NULL COMMENT '开始时间',
  `end_time` varchar(20) NOT NULL COMMENT '结束时间',
  `product_detail` text NOT NULL COMMENT '产品详情',
  `created_at` int(20) NOT NULL COMMENT '添加时间',
  `updated_at` int(20) NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品表';

--
-- 转存表中的数据 `fs_products`
--

INSERT INTO `fs_products` (`product_id`, `product_name`, `product_description`, `contact`, `thumbnail`, `begin_time`, `end_time`, `product_detail`, `created_at`, `updated_at`) VALUES
(116, '12312311111111112啊11123111哈哈', '123123', '123123123', '../../uploads/thumbnail/201609/12/1473648296.png', '1473091200', '1473868800', '<p><img src="/uploads/contentImg/20160912/1473644915118328.jpg" title="1473644915118328.jpg" alt="2.jpg"/><img src="/uploads/contentImg/20160912/1473644953111099.jpg" title="1473644953111099.jpg" alt="3.jpg"/><img alt="1.jpg" src="/uploads/contentImg/20160912/1473645875120579.jpg" title="1473645875120579.jpg"/>大声道阿斯达阿达撒的按时打算123123123aaaaaaaaaaaaaaaaabbbb<br/></p>', 1473143401, 1474624894),
(119, '12312312312312', '123123', '123123', '', '1472680800', '1474495200', '<p>123123213213123</p>\n', 1473227819, 1473227819),
(120, 'asdsadasd', '123213123', '123213123', '../../uploads/thumbnail/201609/12/1473650467.jpg', '1472659200', '1474473600', '<p><img alt="5.png" src="/uploads/contentImg/20160912/1473648375257459.png" title="1473648375257459.png"/>123123123213</p>', 1473227943, 1473650468),
(121, '产品管理测试！！！！！！', 'sdcsdcdscsdc', 'csdcdscsdc', '../../uploads/thumbnail/201609/07/1473228164.png', '1473264000', '1475164800', '<p>阿萨德撒大大阿斯达阿斯达123123<img src="/uploads/contentImg/20160912/1473681708536003.png" title="1473681708536003.png" alt="5.png"/></p>', 1473228164, 1473681710),
(122, '112233', '请问请问阿斯顿', '123123213', '', '1472680800', '1474581600', '<p>电饭锅电饭锅听对方的风格</p>\n', 1473228223, 1473228223),
(123, 'vvfdv', '123123', '123123123', '../../uploads/thumbnail/201609/07/1473229006.png', '1473372000', '1474236000', '<p>12312321323</p>\n', 1473229006, 1473229006),
(124, '啊实打实的阿斯达阿斯达111111111阿斯达奥迪 ', '阿斯达奥迪阿斯达阿斯达', '123123123', '../../uploads/thumbnail/201609/07/1473229936.jpg', '1473199200', '1475186400', '<p>按时打算大声道阿斯达阿斯达阿斯达阿斯达阿斯达阿斯达奥迪阿斯达阿斯达阿斯达奥迪阿斯达阿斯达阿斯达爱死的按时打算的</p>\n', 1473229936, 1473229936),
(125, '测试时间添加', '啊实打实的阿斯达啊的', '123123123', '../../uploads/thumbnail/201609/07/1473233475.jpg', '1472680800', '1473372000', '<p>123213啊实打实的阿达撒阿斯达奥迪</p>\n', 1473233475, 1473233475),
(126, '123123123111', '123123', '123123', '../../uploads/thumbnail/201609/07/1473235577.jpg', '1473177600', '1475078400', '<p>国际化</p>\n<p>国际化（I18N）指软件应用设计成无须改动引擎即可应用于不同语言和地区的过程。对于 web 应用，这点特别重要，因为潜在用户是全球范围的。</p>\n<p>地区和语言</p>\n<p>在 Yii 应用中定义了两个语言属性：[[yii\\base\\Application::$sourceLanguage|source language]]和[[yii\\base\\Application::$language|target language]]。源语言是应用消息原始编写语言：\n1</p>\n<p>echo \\Yii::t(''app'', ''I am a message!'');</p>\n<pre><code>提示：默认是英语，推荐不要更改。原因是人们翻译英语到其他语言比非英语翻译到其他语言更容易。\n</code></pre>\n<p>目标语言是当前使用的语言，在应用配置中如下定义：\n1\n2\n3\n4\n5</p>\n<p>// ...\nreturn [</p>\n<pre><code>''id'' =&gt; ''applicationID'',\n''basePath'' =&gt; dirname(__DIR__),\n''language'' =&gt; ''ru-RU'' // ← 在这里！\n</code></pre>\n<p>然后就能容易地实时更改：\n1</p>\n<p>\\Yii::$app-&gt;language = ''zh-CN'';</p>\n<p>格式是 ll-CC ，其中 ll 是语言的两个或三个小写字母代码，根据ISO-639分配确定，而 CC 是国家代码，根据ISO-3166分配确定。</p>\n<p>如果没有 ru-RU 翻译文件，Yii 将在提示失败前尝试查找 ru 翻译文件。</p>\n', 1473235577, 1473235577),
(127, 'sdsad asd1111', 'asdsadasd', 'asdasdasd', '../../uploads/thumbnail/201609/07/1473238129.jpg', '1473177600', '1474473600', '<p>asdsdsdasdasd</p>\n', 1473238129, 1473238129),
(128, 'asdasdaasd', 'asdasd', 'asdasdasd', '../../uploads/thumbnail/201609/07/1473241853.png', '1472745600', '1474560000', '<p>asdasdasd</p>\n', 1473241853, 1473241853),
(129, '阿大声道', '阿斯达是的撒 ', '123123', '../../uploads/thumbnail/201609/07/1473242404.jpg', '1472659200', '1474473600', '<p>爱上大声大声道阿斯达奥迪阿斯达阿斯达阿斯达<img alt="3.jpg" src="/uploads/contentImg/20160923/1474622245359573.jpg" title="1474622245359573.jpg"/></p>', 1473242404, 1474622250),
(130, '阿斯顿撒旦阿达撒 ', '阿斯达阿斯达阿斯达', '123123123', '../../uploads/thumbnail/201609/07/1473242509.jpg', '1472659200', '1474560000', '', 1473242509, 1473242509),
(131, '啊实打实的阿斯达阿斯达1111', '阿斯达阿斯达阿大声道', '123123123', '../../uploads/thumbnail/201609/07/1473242549.png', '1472659200', '1474473600', '', 1473242549, 1473242549),
(132, '123123 12 ', '123123123', '123123123', '../../uploads/thumbnail/201609/07/1473242621.jpg', '1473177600', '1475078400', '', 1473242621, 1473242621),
(133, '阿斯达阿斯达阿斯达阿斯达阿斯达1111', '按时打算阿斯达阿斯达', '123213213', '../../uploads/thumbnail/201609/07/1473244069.png', '1472659200', '1475078400', '', 1473244069, 1473244069),
(134, 'asdsad asd as11111', 'asdasd asd asd ', 'asd asd asd ', '../../uploads/thumbnail/201609/07/1473244476.png', '1473177600', '1475078400', '', 1473244476, 1473244476),
(135, '顶顶顶顶顶顶顶顶顶顶1111', '气温气温为', '123213123', '../../uploads/thumbnail/201609/07/1473244611.jpg', '1473177600', '1474387200', '', 1473244611, 1473244611),
(136, '按时打算打算 111', '阿斯达阿斯达阿斯达阿斯达', '123213123', '../../uploads/thumbnail/201609/07/1473246075.jpg', '1473091200', '1475078400', '<p>a萨达萨达阿斯达阿斯达阿斯达</p>\r\n', 1473246075, 1473246075),
(137, '测试内容是否可以写入', '按时打算阿斯达阿大声道阿斯达', '13426083768', '../../uploads/thumbnail/201609/07/1473246220.png', '1473177600', '1475078400', '<p><strong>a是的撒阿斯达阿斯达阿达的</strong></p>\r\n\r\n<h1><strong>按时打算打算大声道期望23123 &nbsp;阿斯达大声道阿斯达阿斯达</strong></h1>\r\n\r\n<blockquote>\r\n<p>按时打算打算阿斯达阿斯达阿斯达阿斯达</p>\r\n</blockquote>\r\n', 1473246220, 1473246220),
(138, '1231按时打算阿斯达阿斯达阿斯达', '阿斯达阿斯达阿斯达 ', '123123123', '../../uploads/thumbnail/201609/07/1473246434.png', '1473264000', '1474387200', '<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">\r\n	<tbody>\r\n		<tr>\r\n			<td>12312</td>\r\n			<td>123123</td>\r\n		</tr>\r\n		<tr>\r\n			<td>123123</td>\r\n			<td>123123123</td>\r\n		</tr>\r\n		<tr>\r\n			<td>123123</td>\r\n			<td>112的撒打算的阿斯达啊</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1473246434, 1473246434),
(139, 'asdasdasdasdasdasdasd', 'asdasdasd', 'asdasdasd', '../../uploads/thumbnail/201609/07/1473246926.png', '1472659200', '1475164800', '<p><img alt="" src="http://himg2.huanqiu.com/attachment2010/2016/0907/20160907011301877.jpg" style="width: 400px; height: 272px; float: right;" />​aasdsadasdasdasdasdasdasdadasdasd</p>\r\n', 1473246926, 1473246926),
(140, '啊实打实的啊实打实的', '阿斯达阿斯达阿斯达', '奥迪阿斯达阿斯达 ', '../../uploads/thumbnail/201609/08/1473305586.png', '1472659200', '1473868800', '', 1473305586, 1473305586),
(141, '按时打算的23 213', '阿斯达阿斯达阿斯达', '阿达撒按时打算 ', '../../uploads/thumbnail/201609/08/1473305624.jpg', '1472659200', '1475078400', '', 1473305624, 1473305624),
(143, 'asdasd asd123123', 'asdad asd asd', 'asd asd asd ', '../../uploads/thumbnail/201609/08/1473309520.jpg', '1472659200', '1475078400', '', 1473309520, 1473309520),
(144, 'sdas asd asd a阿斯达阿斯达', '阿斯达阿斯达阿达 ', '阿斯达阿斯达按时打算大声道', '../../uploads/thumbnail/201609/08/1473309596.jpg', '1472659200', '1474387200', '', 1473309596, 1473309596),
(145, '萨达萨达阿斯达阿斯达 ', '的阿斯达阿达收到 ', '奥迪按时打算 ', '../../uploads/thumbnail/201609/08/1473309675.jpg', '1472659200', '1475164800', '', 1473309675, 1473309675),
(146, '按时打算的撒的', '按时打算打算 ', '阿斯达按时打算的', '../../uploads/thumbnail/201609/08/1473309714.png', '1472659200', '1474387200', '', 1473309714, 1473309714),
(147, '萨达大声道阿斯达', '阿斯达阿斯达阿斯达', '阿斯达阿斯达阿斯达阿斯达爱死', '../../uploads/thumbnail/201609/08/1473309768.png', '1472659200', '1474473600', '', 1473309768, 1473309768),
(148, '123123123打死打死', '阿斯达阿斯达阿斯达', '阿达撒阿斯达收到', '../../uploads/thumbnail/201609/08/1473309917.jpg', '1472659200', '1475078400', '<p>按时打算阿斯达阿斯达阿斯达1111111111111111</p>\r\n', 1473309917, 1473309917),
(151, '21312312', '123123', '123123', '../../uploads/thumbnail/201609/08/1473317829.png', '1472745600', '1474992000', '', 1473317829, 1473317829),
(152, '555555', '5555555555555555', '5555555555555555', '../../uploads/thumbnail/201609/08/1473317966.png', '1473264000', '1475078400', '<p>55555555555555555555555555555555555</p>\r\n', 1473317966, 1473317966),
(153, '阿打算的撒的', '按时打算大声道', ' 12阿斯达 ', '../../uploads/thumbnail/201609/08/1473320966.jpg', '1472659200', '1474387200', '123123123123123', 1473320966, 1473320966),
(154, 'xcasxasxasxas ', 'asdas das', 'das dasd asd asd ', '../../uploads/thumbnail/201609/08/1473321365.png', '1472659200', '1475078400', '<p><strong><span style="font-size: 20px;">asdasd asd asd asd asd asd asd123123123</span></strong></p>', 1473321365, 1473321365),
(155, 'asdasdasd 123123', 'asdas d', 'asdasdasdasd', '../../uploads/thumbnail/201609/08/1473326985.png', '1474041600', '1474473600', '<p><strong>adasdasdasdasd</strong></p><p><strong>大大打算大声道阿斯达阿斯达阿斯达阿斯达</strong></p>', 1473326985, 1473326985),
(157, '阿斯达阿斯达阿斯达1111', '阿斯达阿斯达阿斯达', '阿斯达阿斯达阿斯达阿斯达', '../../uploads/thumbnail/201609/08/1473334328.jpg', '1472659200', '1475078400', '<p><img src="/uploads/contentImg/20160908/1473334318110109.jpg" title="1473334318110109.jpg" alt="1.jpg"/><img src="/uploads/contentImg/20160908/1473334321103078.jpg" title="1473334321103078.jpg" alt="2.jpg"/><img src="/uploads/contentImg/20160908/1473334325830341.jpg" title="1473334325830341.jpg" alt="3.jpg"/></p>', 1473334328, 1473334328),
(158, '123123打死打死1123', '123123123', '1231231', '../../uploads/thumbnail/201609/08/1473335056.jpg', '1472659200', '1475164800', '<p>萨达萨达阿斯达阿斯达萨达萨达阿斯达<br/></p>', 1473335056, 1473335056),
(159, '阿斯顿撒旦撒阿斯达啊', '阿斯达阿斯达阿斯达', '阿斯达阿斯达阿斯达', '', '1472659200', '1474992000', '<p>按时打算的萨达阿斯达阿斯达阿斯达</p>', 1473335614, 1473335614),
(160, '阿斯顿撒旦奥迪阿斯达阿斯达阿斯达', '阿斯达阿斯达阿斯达阿斯达', '阿斯达阿斯达阿斯达阿斯达', '', '1472659200', '1474560000', '<p>啊实打实大师打算大声道阿斯达<img src="/uploads/contentImg/20160908/1473335797492713.png" title="1473335797492713.png" alt="5.png"/></p>', 1473335800, 1473335800),
(161, '测试是否成功！！！', '测试是否成功！！！', '测试是否成功！！！', '', '1472659200', '1474992000', '<p>测试是否成功！！！测试是否成功！！！测试是否成功！！！测试是否成功！！！</p><p><br/></p><p><img src="/uploads/contentImg/20160908/1473336079108947.jpg" title="1473336079108947.jpg" alt="2.jpg"/></p>', 1473336082, 1473336082),
(162, '哈哈，测试好像成功了，就差一点点啦 ', '阿斯达阿大声道阿斯达', '阿斯达啊实打实的', '', '1472659200', '1475078400', '<p><img src="/uploads/contentImg/20160908/1473336323651156.jpg" title="1473336323651156.jpg" alt="3.jpg"/><img src="/uploads/contentImg/20160908/1473336329480191.png" title="1473336329480191.png" alt="4.png"/><img src="/uploads/contentImg/20160908/1473336332852932.png" title="1473336332852932.png" alt="5.png"/></p>', 1473336334, 1473336334),
(163, '撒擦傻傻的阿斯达阿斯达', '阿斯达阿斯达阿斯达', '阿斯达 阿斯达奥迪', '', '1473177600', '1473696000', '<p>阿斯达阿斯达阿斯达阿斯达阿斯达阿斯达阿斯达阿斯达<img src="/uploads/contentImg/20160908/1473336371567804.png" title="1473336371567804.png" alt="5.png"/></p>', 1473336374, 1473336374),
(164, '按时打算大大', '奥迪奥迪', '奥迪阿斯达阿斯达', '', '1473091200', '1475078400', '<p>阿斯达阿斯达阿斯达爱死的</p>', 1473336472, 1473336472),
(165, '13123', '123213', '123123123', '', '1473091200', '1474992000', '<p>123123213213</p>', 1473336555, 1473336555),
(166, 'asdsad asdasd', 'asdasdsad', 'adasdsad', '', '1472659200', '1474992000', '<p>asdasdasdasd</p>', 1473336750, 1473336750),
(167, 'asdasdasdxcvxcv', 'xcvxcv', 'xcvxcv', '../../uploads/thumbnail/201609/08/1473337356.jpg', '1472659200', '1474560000', '<p>xcvxcvxcvxcvxcvxcv<img alt="5.png" src="/uploads/contentImg/20160908/1473337354500846.png" title="1473337354500846.png"/></p>', 1473337356, 1473337356),
(168, '阿斯达阿大声道', '阿斯达阿斯达 ', '阿斯达阿啊实打实的', '../../uploads/thumbnail/201609/08/1473337835.jpg', '1473264000', '1474387200', '<p>阿斯达啊实打实的阿斯达萨达萨达啊阿斯达阿斯达</p>', 1473337835, 1473337835),
(169, 'dadasdazxczxczxc', 'daczxczxc', 'zxczxczxc', '', '1472745600', '1473955200', '<p>zxczxczxczxczxczxc<img alt="3.jpg" src="/uploads/contentImg/20160908/1473337430980565.jpg" title="1473337430980565.jpg"/></p>', 1473338029, 1473338029),
(170, 'asdasd asd asd 1111', 'adas dasd', 'asd asd asd', '', '1472659200', '1474473600', '<p><img alt="5.png" src="/uploads/contentImg/20160908/1473338049106559.png" title="1473338049106559.png"/></p>', 1473338051, 1473338051),
(171, 'asdas dasd asd 1111', 'dasd asdas d', 'asd asda sd ', '../../uploads/thumbnail/201609/08/1473338074.jpg', '1472659200', '1474473600', '<p>asd asd asda sdas dasd <img alt="2.jpg" src="/uploads/contentImg/20160908/1473338072164252.jpg" title="1473338072164252.jpg"/></p>', 1473338074, 1473338074),
(172, '追逐梦想，何时开始都不算晚 ', '追逐梦想，何时开始都不算晚 ', '13426083768', '../../uploads/thumbnail/201609/09/1473386520.png', '1473350400', '1475078400', '<p>“现在用水，都要先试下有没有沙子，才能洗米煮饭，可是沙子很细，有时候你看不出来，也不知道有没有吃进去。”家住福建宁德市东侨经济开发区盈丰佳园小区1号楼710室的蔡先生，8日如是苦恼地对中新网记者说。</p><p>2014年10月搬入盈丰佳园的蔡先生介绍称，去年八九月水龙头出现沙子，当时问了小区物业，知道当时很多小区在做自来水管道改造，觉得有可能在施工的过程中，因为管道互相贯通，导致沙子进入水管。</p><p>“心想这段时间过去应该就没什么事情，当时在家里也比较少，就没在意。”蔡先生说，没想到之后水龙头一开，又出现陆陆续续流出沙子的情况。</p><p>中新网记者2015年11月20日曾报道《福建宁德一小区自来水含沙 停水频繁持续两月余》，彼时宁德市自来水有限公司回复称，系因小区外部管道经常爆管，导致用户经常性停水和偶尔有沙的现象；已出资改造管道，预计一个星期左右就能完工。</p><p>然而，自来水含沙的情况，依然没有好转。当天，中新网记者来到蔡先生的家中。在蔡先生家中的一处洗脸槽，记者打开水龙头蓄水一会，便见到水槽底部沉淀着不少沙子；即使放水许久后，仍有不少沙子陆陆续续流出。</p><p>蔡先生称，这对家庭生活造成很大的困扰，孩子现在都不愿意洗澡，一洗，头上、身上都是沙子；热水器、洗衣机等一些相关的用水电器，也都很受影响，出水量很小，并造成不同程度的损坏。</p><p><br/></p>', 1473386520, 1473386520),
(173, 'asdasd asd', 'asdasdasd', 'asdasdasd', '../../uploads/thumbnail/201609/09/1473393841.jpg', '1472659200', '1474473600', '<p>asdasdasdasdasdasd</p>', 1473393841, 1473393841),
(174, '123123大苏打实打实大苏打', '啊实打实的阿斯顿阿斯顿', '123213的', '../../uploads/thumbnail/201609/09/1473394598.jpg', '1472659200', '1475078400', '<p><img src="/uploads/contentImg/20160908/1473337028707313.jpg" style=""/>123123213</p><p><img src="/uploads/contentImg/20160908/1473336371567804.png" style=""/>123123123213213</p><p><img src="/uploads/contentImg/20160908/1473336332852932.png" style=""/>123123123213</p><p><br/></p>', 1473394598, 1473394598),
(175, 'asdsad asd asd', 'a sdas dad asd ', 'asdasdasd', '../../uploads/thumbnail/201609/09/1473395240.jpg', '1473350400', '1474473600', '<p>asd asd asd asd asdasd</p>', 1473395240, 1473395240),
(176, '修改了啊修改饿狼啊-又修改了11', 'dasd 123123--新的信息', '13545647821', '../../uploads/thumbnail/201609/09/1473414440.png', '1472832000', '1475078400', '<p><img src="/uploads/contentImg/20160909/1473395693109481.jpg" title="1473395693109481.jpg" alt="3.jpg"/><img src="/uploads/contentImg/20160909/1473414024110260.jpg" title="1473414024110260.jpg" alt="2.jpg"/></p>', 1473395713, 1473414440),
(177, '123123123', '12312312', '3123123', '../../uploads/thumbnail/201609/12/1473659030.png', '1472659200', '1474387200', '<p>123123213123<img src="/uploads/contentImg/20160912/1473659027421754.png" title="1473659027421754.png" alt="5.png"/></p>', 1473659030, 1473659030),
(178, '新的内容试试看对不对', '新的内容试试看对不对', '新的内容试试看对不对', '../../uploads/thumbnail/201609/12/1473673108.jpg', '1472745600', '1473868800', '<p>新的内容试试看对不对新的内容试试看对不对新的内容试试看对不对新的内容试试看对不对<img src="/uploads/contentImg/20160912/1473673106247217.jpg" title="1473673106247217.jpg" alt="2.jpg"/></p>', 1473673108, 1473673108),
(179, '今天添加一个新产品试试', '试试啊，看看效果', '1234123123', '../../uploads/thumbnail/201609/23/1474622335.jpg', '1473091200', '1474992000', '<p>萨达萨达大声道阿斯达阿斯达<img alt="5.png" src="/uploads/contentImg/20160923/1474622333456997.png" title="1474622333456997.png"/></p>', 1474622335, 1474622335),
(180, '这次真的试试啊', '这次真的试试啊', '123123', '../../uploads/thumbnail/201609/23/1474623041.jpg', '1472659200', '1475078400', '<p>阿打算的撒大声道<img alt="2.jpg" src="/uploads/contentImg/20160923/1474623039992269.jpg" title="1474623039992269.jpg"/></p>', 1474623041, 1474623041),
(181, '11111122222233333', '3123123123123', '123123123', '../../uploads/thumbnail/201609/23/1474623561.jpg', '1472745600', '1474387200', '<p>123123123123<br/></p>', 1474623561, 1474623561),
(182, '好像成功啦', '好像CEO个', '13123123', '', '1472659200', '1473955200', '<p>123123123213123<br/></p>', 1474624919, 1474624919);

-- --------------------------------------------------------

--
-- 表的结构 `fs_user`
--

CREATE TABLE `fs_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `fs_user`
--

INSERT INTO `fs_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'lipeng', 'cs-9F40G0v4jCVHWfH-mQx4EqvvUHfaN', '$2y$13$ROv9/7Os.YDTqVbqRbYDVeonyUj.8UZXBwxUfHAnLaBbJH7IutjEm', 'EsGKoY5dIr3-agC9GiaJFXAvcy6DWL-q_1471342505', 'lipengblee@qq.com', 10, 1471341263, 1471342505),
(2, 'lipeng1', 'Qwcf8fhYyzfS6v4vIgCBpARTGbypKHsn', '$2y$13$2S/rr7UMggoUNu9kx5ZOy.kLnAGPGEyEPygxdJyAwy5OTWkhAMZCi', NULL, 'lipengblee1@qq.com', 10, 1471342415, 1471342415);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fs_admin`
--
ALTER TABLE `fs_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `fs_migration`
--
ALTER TABLE `fs_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `fs_products`
--
ALTER TABLE `fs_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `fs_user`
--
ALTER TABLE `fs_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `fs_admin`
--
ALTER TABLE `fs_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `fs_products`
--
ALTER TABLE `fs_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品ID', AUTO_INCREMENT=183;
--
-- 使用表AUTO_INCREMENT `fs_user`
--
ALTER TABLE `fs_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
