<?php

class blogTableSeeder extends Seeder {
    public function run()
    {
        
        DB::table('blog_article')->insert(array(
            
            array(
                'art_id' => 2,
                'art_title' => ' 习近平与他的作家“朋友圈”',
                'art_tag' => '习近平.朋友圈',
                'art_description' => '习近平回到当年居住过的窑洞，与村民亲切交谈',
                'art_thumb' => '/uploads/20161019161621505.jpg',
                'art_content' => '<p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">▲习近平回到当年居住过的窑洞，与村民亲切交谈</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　路遥、贾大山、梁晓声、贾平凹、谷溪……热爱文学的习近平与许多作家建立了深厚的友谊。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　他曾和路遥住过一个窑洞，一起谈文学，谈理想；他曾为好朋友贾大山撰写了饱含深情的纪念文章《忆大山》。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　贾平凹曾由衷地说：“习总书记其实对文学界是一直熟悉和关心的。”</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　<strong>习近平与路遥、谷溪</strong></p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　2015年时，诗人谷溪已是一位74岁的老人。但当他回忆起与习近平、路遥一同度过的青春岁月，仍然难以掩饰自己的激动之情。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　习总书记曾说过:“我跟路遥很熟,当年住过一个窑洞,曾深入交流过。路遥和谷溪他们创办《山花》的时候,还是写诗的,不写小说。”</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　谷溪说,习总书记所说的《山花》是他在1972年9月创办的延川县文艺小报,由他担任主编,路遥常在《山花》上发表诗作。路遥写诗不写小说的时候,就是指那个年月。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　谷溪清楚地记得，1975年7月,他给时任梁家河大队党支部书记的习近平在延安报刊上写过长篇通讯《取火记》。进村采访时,因路陡不平,他乘坐的吉普车因打滑无法上坡,是习近平和几个后生一起用力,才将车推进了知青们居住的大院里。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">▲1973年，习近平(左二)与知青好友合影，这张照片正是谷溪拍摄的</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　当年，北京知青习近平来到延川县文安驿公社梁家河大队插队落户。路遥则是当地的回乡知青,很喜欢结交见多识广的北京知青，他俩成了朋友。习近平所在的梁家河离延川县城约有25公里山路，因交通不便,只能靠步行。习近平来县城开会或办事,晚了回不了梁家河,他就会找路遥长谈。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　谷溪说,习总书记当年爱文学、爱读书,他和路遥谈文学、谈民生、谈理想、谈国家……话题非常广泛,充满家国情怀。</p><p><br/></p>',
                'art_time' => 1476865008,
                'art_editor' => '门豪鹏',
                'art_view' => 50,
                'cate_id' => 1,
            ),

            array(
                'art_id' => 3,
                'art_title' => ' 李克强主持召开国务院振兴东北地区等老工业基地推进会议',
                'art_tag' => ' 李克强.会议.国务院.振兴',
                'art_description' => '积极改革创新 主动破困前行',
                'art_thumb' => '/uploads/20161019162023940.jpg',
                'art_content' => '<p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">李克强在国务院振兴东北地区等老工业基地推进会议上强调</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　积极改革创新 主动破困前行</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　奋力开创东北全面振兴新局面</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　张高丽出席</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">10月18日，中共中央政治局常委、国务院总理李克强主持召开国务院振兴东北地区等老工业基地推进会议，部署进一步推动东北振兴工作。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　中共中央政治局常委、国务院副总理张高丽出席会议。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　会议审议通过《关于深入推进实施新一轮东北振兴战略部署加快推动东北地区经济企稳向好若干重要举措的意见》和《东北振兴“十三五”规划》。李克强说，党中央、国务院高度重视东北等老工业基地振兴工作，习近平总书记就东北振兴多次作出重要指示。各相关方面必须充分认识，推动东北经济脱困向好，实现新一轮振兴，事关全国经济发展和转型升级大局，事关区域协调发展全局，事关广大群众福祉。要坚决贯彻党中央、国务院部署，始终坚持党的基本路线，坚持发展第一要务，落实新发展理念，紧紧抓住制约东北发展的突出问题，继续依靠改革创新，坚定信心破困前行，再创东北地区新的辉煌。</p><p><br/></p>',
                'art_time' => 1476865239,
                'art_editor' => '门豪鹏',
                'art_view' => 2,
                'cate_id' => 2,
            ),

            array(
                'art_id' => 4,
                'art_title' => '景海鹏陈冬进入天宫二号 拍摄首张\"全家福\"',
                'art_tag' => '景海鹏.陈冬进.天宫二号.全家福',
                'art_description' => '景海鹏陈冬进入天宫二号，拍摄首张“全家福”，向全国人民问好。',
                'art_thumb' => '/uploads/20161019162141240.gif',
                'art_content' => '<p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">中新网10月19日电 在神舟十一号与天宫二号成功实现自动交会对接三个小时后，航天员景海鹏成功打开天宫二号实验舱舱门，顺利进入天宫二号空间实验室。景海鹏成为第一个进入天宫二号的航天员。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　另据央视：景海鹏陈冬进入天宫二号，拍摄首张“全家福”，向全国人民问好。</p><p><br/></p>',
                'art_time' => 1476865343,
                'art_editor' => '门豪鹏',
                'art_view' => 0,
                'cate_id' => 5,
            ),

            array(
                'art_id' => 5,
                'art_title' => '习近平同乌拉圭总统巴斯克斯举行会谈 两国元首决定建立中乌战略伙伴关系',
                'art_tag' => '习近平.乌拉圭.巴斯克斯',
                'art_description' => '习近平指出，中乌虽然相距遥远，国情各异，但建交28年来，双方始终坚持平等相待，开展互利合作，成为好朋友、好伙伴。当前中乌关系已经站在新的历史起点上，我们应该携手努力，全面规划和执行两国合作蓝图，更好造福两国人民。',
                'art_thumb' => '/uploads/20161019162349924.jpg',
                'art_content' => '<p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\"><strong>央视网消息</strong>&nbsp;(新闻联播)：欢迎仪式后，习近平主席同巴斯克斯总统举行会谈。两国元首决定在相互尊重、平等互利的基础上建立中乌战略伙伴关系，以深化和拓展两国各领域互利友好合作，共同谱写双边关系新篇章。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　习近平指出，中乌虽然相距遥远，国情各异，但建交28年来，双方始终坚持平等相待，开展互利合作，成为好朋友、好伙伴。当前中乌关系已经站在新的历史起点上，我们应该携手努力，全面规划和执行两国合作蓝图，更好造福两国人民。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　习近平强调，中乌要加强全方位交往，筑牢政治互信。要保持高层密切沟通，完善合作机制，加强政府、立法机构、政党等各领域各层级交流，不断增进相互了解和信任。双方要扩大互利合作，深化利益交融。中方感谢乌方支持“一带一路”倡议，希望双方加强发展战略对接，推动两国经贸合作提质升级。双方要继续落实好两国农业合作5年规划，优化双边贸易结构，拓展服务贸易，促进双边贸易持续增长。中方愿鼓励更多<a href=\"http://country.huanqiu.com/china\" class=\"linkAbout\" target=\"_blank\" title=\"中国\" style=\"color: rgb(6, 52, 111); text-decoration: none; border-bottom: 1px dotted rgb(6, 52, 111); margin: 0px 5px; padding: 0px 0px 2px;\">中国</a>企业赴乌投资兴业，参与乌拉圭基础设施建设，扩大双方农业、清洁能源、通信、矿业、制造业和金融等领域互利合作。双方要密切人文交流，促进文化、教育、科技、南极、旅游、地方、足球等领域交流合作，巩固中乌友好。双方要加强战略协作，维护共同利益。中方愿就气候变化、全球经济治理、2030年可持续发展议程、维和、南南合作等问题同乌方加强沟通和协调。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　习近平指出，中方坚定支持拉<a href=\"http://country.huanqiu.com/america\" class=\"linkAbout\" target=\"_blank\" title=\"美国\" style=\"color: rgb(6, 52, 111); text-decoration: none; border-bottom: 1px dotted rgb(6, 52, 111); margin: 0px 5px; padding: 0px 0px 2px;\">美国</a>家为维护地区稳定、团结、发展所作努力。当前中拉关系已进入双边合作和整体合作并行发展的新阶段，中方愿同乌拉圭以及拉美各国一道努力，共同构建1+3+6合作新框架，推动中拉关系实现更大发展，打造携手共进的命运共同体。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　巴斯克斯表示，乌中人民拥有深厚友谊。发展好对华关系是乌拉圭国策。很高兴今天乌中在相互尊重、平等互利基础上建立战略伙伴关系。这将开辟两国关系新篇章。乌方致力于深化两国互信，支持中国统一大业。双方在经贸、投资、金融、农业、渔业、能源，地方、足球等领域合作势头良好。乌方欢迎中国企业加大对乌基础设施建设投资，愿意与中国商签双边自由贸易协定。中国在国际事务中发挥着重要积极作用，中国的发展推动着世界经济的增长。乌方愿同中方共同推动中拉关系更大发展，并密切在国际和地区事务中协调合作。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　会谈后，双方发表《<a href=\"http://country.huanqiu.com/china\" class=\"linkAbout\" target=\"_blank\" title=\"中华人民共和国\" style=\"color: rgb(6, 52, 111); text-decoration: none; border-bottom: 1px dotted rgb(6, 52, 111); margin: 0px 5px; padding: 0px 0px 2px;\">中华人民共和国</a>和<a href=\"http://country.huanqiu.com/uruguay\" class=\"linkAbout\" target=\"_blank\" title=\"乌拉圭东岸共和国\" style=\"color: rgb(6, 52, 111); text-decoration: none; border-bottom: 1px dotted rgb(6, 52, 111); margin: 0px 5px; padding: 0px 0px 2px;\">乌拉圭东岸共和国</a>关于建立战略伙伴关系的联合声明》。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　两国元首见证了外交、文化、教育、工业、农业、能源、旅游等领域双边合作文件的签署。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　杨洁篪等参加上述活动。</p><p><br/></p>',
                'art_time' => 1476865453,
                'art_editor' => '门豪鹏',
                'art_view' => 62,
                'cate_id' => 5,
            ),

            array(
                'art_id' => 6,
                'art_title' => '中国神舟十一号与天宫二号在太空对接成功',
                'art_tag' => '神舟十一号',
                'art_description' => '神舟十一号与天宫二号的交会对接是一个非常复杂的过程，包含一系列的步骤，要让两个8吨多的“大家伙”在每秒7.9公里左右的飞行速度下完美对接在一起，这个过程仿佛就是在太空中穿针引线。',
                'art_thumb' => '/uploads/20161019162534588.gif',
                'art_content' => '<p style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 15px; color: rgb(58, 58, 58); font-size: 14px; white-space: normal; text-indent: 2em; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\"><span style=\"word-wrap: break-word; margin: 0px; padding: 0px;\">中新网10月19日电 神舟十一号飞船于北京时间19日凌晨与天宫二号成功实施自动交会对接。合体后，景海鹏和陈冬两名航天员将进驻天宫二号，开展空间科学实验。</span></p><p style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 15px; color: rgb(58, 58, 58); font-size: 14px; white-space: normal; text-indent: 2em; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\">神舟十一号与天宫二号的交会对接是一个非常复杂的过程，包含一系列的步骤，要让两个8吨多的“大家伙”在每秒7.9公里左右的飞行速度下完美对接在一起，这个过程仿佛就是在太空中穿针引线。</p><p style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 15px; color: rgb(58, 58, 58); font-size: 14px; white-space: normal; text-indent: 2em; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\">在经过5次变轨后，神舟十一号到达天宫二号后方约52公里左右的位置，这两个8吨重的“大家伙”进入自动控制状态，由飞船加速追赶天宫二号，为了安全起见，两个“大家伙”在距离5公里、400米、120米和30米共四个停泊点处减速调整。</p><p style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 15px; color: rgb(58, 58, 58); font-size: 14px; white-space: normal; text-indent: 2em; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\">在神舟、天宫追追停停的过程中两名航天员并没有闲着，他们首先回到返回舱穿上航天服并将返回舱和轨道舱之间的舱门关上。等到在相距120米的停泊点处，两名航天员处于随时备份状态，准备手动控制干预。到相距30米的停泊点处，神舟十一号飞船伸出捕获索，伸到天宫二号上面，之后捕获索慢慢收缩，将飞船和天宫慢慢拉近，然后进行交会对接。</p><p style=\"word-wrap: break-word; margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 15px; color: rgb(58, 58, 58); font-size: 14px; white-space: normal; text-indent: 2em; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;\">天宫二号空间实验室于9月15日晚上在酒泉卫星发射中心成功发射升空，已在轨运行一个多月。天宫二号有效载荷进入太空后，陆续进行了加电自检、在轨初始状态设置和初步功能测试，各有效载荷和在轨支持设备运行正常，性能稳定，状态良好。</p><p><br/></p>',
                'art_time' => 1476865537,
                'art_editor' => '门豪鹏',
                'art_view' => 0,
                'cate_id' => 1,
            ),

            array(
                'art_id' => 7,
                'art_title' => '港府就辱国议员可重新宣誓提司法复核被拒 港人：解散立法会',
                'art_tag' => '港府.辱国议员',
                'art_description' => '在当晚高等法院法庭上，各方争论激烈。代表律政司的资深大律师表示，梁、游两人明显违反《基本法》第104条以及《宣誓及声明条例》第21条，“若容许二人再宣誓，会向公众和世界发出讯息，即使不拥护基本法亦可担任立法会议员”。',
                'art_thumb' => '/uploads/20161025133147398.jpg',
                'art_content' => '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">【环球时报驻香港特约记者 凌德 环球时报记者 郭孝伟】高等法院晚上9时开庭审理香港特首梁振英与港府律政司联合提出的司法复核请求。律政司的司法复核申请称，梁颂恒、游蕙祯已失去当议员的资格，要求终止立法会主席梁君彦容许两人再宣誓的决定，并申请禁制令禁止两人再宣誓。高院法官区庆祥在听罢各方陈词后受理案件，但最后决定不批准禁制令。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　在当晚高等法院法庭上，各方争论激烈。代表律政司的资深大律师表示，梁、游两人明显违反《基本法》第104条以及《宣誓及声明条例》第21条，“若容许二人再宣誓，会向公众和世界发出讯息，即使不拥护基本法亦可担任立法会议员”。梁、游两人当晚出庭称，“特区政府破坏三权分立，滥用司法程序，在他们再次宣誓前实施突袭，是为了不惜一切要褫夺他们的议员资格”。代表立法会主席的律师则称，虽然有议员宣誓失败，但不代表他们拒绝宣誓。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　18日上午，立法会主席梁君彦裁定五名候任议员上星期三的宣誓无效，包括“青年新政”的梁颂恒及游蕙祯、姚松炎、刘小丽及黄定光，他们需要重新宣誓。梁君彦在书面裁决中特别指出，梁、游两人在宣誓时，曾经改变誓言内容，并展示印有“香港不是<a href=\"http://country.huanqiu.com/china\" class=\"linkAbout\" target=\"_blank\" title=\"中国\" style=\"color: rgb(6, 52, 111); text-decoration: none; border-bottom: 1px dotted rgb(6, 52, 111); margin: 0px 5px; padding: 0px 0px 2px;\">中国</a>”字句的标语，以及使用贬词表达中国，故裁定他们不可能严肃看待誓词、不愿受誓词约束。但梁君彦称，准许五人19日重新宣誓。在立法会当天召开的记者会上，梁君彦称，倘若议员19日再次宣誓时在誓词中“加料”，将判决他们“拒绝宣誓”，并交由政府及执法部门处理。当被问到如果有议员重新宣誓无效，会否再次给予机会，梁君彦说，“机会不大”。</p><p><br/></p>',
                'art_time' => 1476865588,
                'art_editor' => '门豪鹏',
                'art_view' => 0,
                'cate_id' => 6,
            ),

            array(
                'art_id' => 8,
                'art_title' => '楼市抑制投机力度加大，为谁创造了机遇？',
                'art_tag' => '楼市.投机力度',
                'art_description' => '楼市抑制投机力度加大，为谁创造了机遇？',
                'art_thumb' => '/uploads/20161019162725483.jpg',
                'art_content' => '<p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">楼市抑制投机力度加大，为谁创造了机遇？</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">近一段时期，密集的楼市调控政策，引起了市场的激烈探讨。然而，对于此次多地出台的楼市调控政策，其调控力度明显，对高杠杆炒房投机客构成了直接性的冲击。或许，针对此次楼市调控，真的是“动真格”了。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">高杠杆拿地、高杠杆炒房以及一系列高度投机的行为，确实引起了市场各方的担忧。或许，站在他们的角度思考，并不希望房价出现暴涨暴跌的走势，而是期望其得以平稳过渡，甚至回归居住的属性。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">不过，面对这一轮轰轰烈烈的调控风波，其最直接的目的，莫过于打击高度投机的行为，让市场得以理性回归。与此同时，或许，更期待庞大的资金，最终得以重返至实体经济，降低“脱实向虚”风险的冲击压力。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">抑制投机力度的加大，这无疑引起了社会各界的深思。不可否认，随着楼市调控政策的密集来袭，其对部分高度投机的市场，确实起到了一定的抑制效果，但最终可否形成楼市的重大拐点，仍需要继续观察。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">不过，随着抑制投机力度的加大，究竟为谁创造了机遇呢？</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">民间资金多，投资渠道少，这是当前国内市场的真实写照。然而，时下，资产荒，加上人民币贬值的压力，却导致大量资金四处寻求它们心目中的优质资产。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">多年来，在一线，乃至部分二线楼市的赚钱效应诱惑下，更多资金愿意持续进入相应的楼市市场，试图获得资产保值增值的需求。然而，在接连调控政策的影响之下，多地限购令的出炉，却或多或少降低了部分资金涌进楼市市场的热情，进而寻求其余更具资产保值增值效果的投资渠道。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">股票，基金、黄金、P2P、银行理财产品等，莫过于投资者，尤其是中产阶层青睐的投资渠道。其中，作为直接融资渠道之一的股票市场，它已经成为了不少家庭资产配置的重点选择。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">然而，对于中国股市而言，虽然当前已基本形成政策底的形态，但因缺乏持续性的赚钱效应，场外资金依旧处于观望等待的状态之中。至于与我们邻近的港股市场，经历之前的快速上涨行情之后，近期也开始呈现出高位回落的走势，而两地市场的折溢价空间，也为不少资金提供了套利的需求。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">实际上，在当前的国内市场环境下，市场基本上不缺乏资金，缺乏的往往是投资信心。然而，对于投资信心的建立，也离不开持续性赚钱效应的推动影响。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">回顾2014、2015年的股市暴涨行情，在持续性赚钱效应的助推之下，各路资金蜂拥而至，期间还有大量资金借道高杠杆工具，来实现利润的最大化。到了今年年初，黄金市场火爆，资金又快速投向了黄金市场，试图获得资产增值的需求。至于近年来热度不减的楼市，尤其是一二线楼市市场，更是备受各路资金的青睐，而随着“房价只涨不跌”意识的深入，不少投资者却对楼市市场抱有一种痴迷的态度。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">抑制楼市高度投机行为，本来可以为股市带来输血的契机。但，大量的场外资金，似乎经历过前期股灾风波的冲击，而变得更加谨慎与聪明。或许，对于这些资金来说，它们似乎都在等待着股市持续性赚钱效应的确立，进而加快其入场布局的步伐，来满足其资产保值增值的真实需求。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">由此可见，对于波动率持续降低、投资热情持续低迷的中国股市而言，其本身并不缺乏资金，缺乏的还是投资信心，缺乏的还是持续性的市场赚钱效应。因此，要达到激活股市投资吸引力的目的，加快场外资金的入场步伐，更需要在保持内部市场环境稳定的前提下，借助外力来激发股市的投资热情。由此一来，在市场赚钱效应得以形成之际，才有望吸引更多场外资金的入场，减缓资金出逃寻求避险的风险压力。</p><p><br/></p>',
                'art_time' => 1476865659,
                'art_editor' => '门豪鹏',
                'art_view' => 11,
                'cate_id' => 1,
            ),

            array(
                'art_id' => 9,
                'art_title' => '秦致都被逐出汽车之家董事会了 还撤私有化要约',
                'art_tag' => '汽车之家',
                'art_description' => '李想、秦致及原有汽车之家高管从管理层和董事会彻底出局，就使得前汽车之家CEO秦致为首的买方团早已名存实亡，取消私有化要约也只有象征意义。',
                'art_thumb' => '/uploads/20161019162828524.jpg',
                'art_content' => '<p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">汽车之家（NYSE:ATHM）昨日宣布，公司董事会下属特别独立委员会接到了前汽车之家CEO秦致为首的买方团通知函，他们将撤回2016年4月份提交的非约束性私有化要约。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">买家联盟在通知函中称，鉴于当前的各种形势，他们已决定不再继续执行之前的私有化要约，为了评估该私有化要约而组建的特别独立委员会也于10月12日解散。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">早在2016年4月15日，澳洲电讯宣布，将以16亿美元价格出售汽车之家47.7%股权予中国平安。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">仅隔一天，当时的汽车之家管理层就提出要对汽车之家进行私有化，买方团由时任汽车之家CEO秦致及管理层牵头，博裕、红杉、高瓴资本参与。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">此后汽车之家宣布成立独立特别委员会来评估汽车之家私有化。独立特别委员会成员包括Ted Tak-Tai Lee、前艺龙CEO崔永福、1号店联合创始人刘峻岭。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">不过，2016年6月，澳大利亚电信公司完成了以16亿美元向中国平安出售中国网站汽车之家47%股份的交易，这使得以秦致为首的管理层和买方团陷入到尴尬境地。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">在中国平安成汽车之家大股东后第二天，汽车之家就召开临时董事会，秦致被新任大股东平安占多数席董事会清洗，一同离任的还有CFO钟奕祺。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">7月12日，汽车之家再次宣布高管团队调整，称因工作需要，公司进行相关人事调整：秦致、钟奕祺、韩松、李欣、王友华不再担任原职务。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">汽车之家同时任命陆敏担任公司董事长兼CEO，并兼管经销商事业部整体业务；康雁担任公司总裁，兼管媒体事业部整体业务；</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">王俊朗担任公司副总裁、首席财务官（CFO）；石京魁担任公司副总裁，分管人力资源。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">9月20日，汽车之家再次下发通知，汽车之家联合创始人樊铮、汽车之家二手车事业部总经理胡永平不再担任原职务，二手车事业部及移动团队整体工作由公司总裁康雁分管。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">到10月3日，汽车之家宣布康雁、王俊朗取代李想、秦致出任公司董事，至此，中国平安彻底清除掉了汽车之家原有管理团队身影，由中国平安系力量取代。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">李想、秦致及原有汽车之家高管从管理层和董事会彻底出局，就使得前汽车之家CEO秦致为首的买方团早已名存实亡，取消私有化要约也只有象征意义。</p><p class=\"text\" style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 14px; line-height: 24px; font-family: arial, &quot;Hiragino Sans GB&quot;, 微软雅黑, MicrosoftYaHei, 宋体, 宋体, Tahoma, Arial, Helvetica, STHeiti; vertical-align: baseline; -webkit-font-smoothing: antialiased; text-indent: 28px; color: rgb(51, 51, 51); letter-spacing: 0.5px; white-space: normal; background-color: rgb(255, 255, 255);\">据悉，不久前汽车之家App上线了新版本的App,对首页框架进行了大幅度调整。李想曾在微博上公开表示，想在iPhone上删掉汽车之家的APP。</p><p><br/></p>',
                'art_time' => 1476865715,
                'art_editor' => '门豪鹏',
                'art_view' => 1,
                'cate_id' => 1,
            ),

            array(
                'art_id' => 10,
                'art_title' => '中国、日本、沙特大规模减仓美国国债 谁接的盘？',
                'art_tag' => '中国.日本.沙特.美国国债',
                'art_description' => '美国财政部周二发布月度国际资本流动报告显示，美国政府债券最大海外持有者中国8月份债券、票据和国库券持仓1.19亿美元，环比减少337亿美元。毫无意外的是美国国债最大的抛售国，这也是自2013年以来规模最大的减仓。',
                'art_thumb' => '/uploads/20161019162938599.jpg',
                'art_content' => '<p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">美国财政部周二发布月度国际资本流动报告显示，美国政府债券最大海外持有者中国8月份债券、票据和国库券持仓1.19亿<a href=\"http://app.finance.ifeng.com/hq/rmb/quote.php?symbol=USD\" target=\"_blank\" style=\"text-decoration: none; color: rgb(0, 66, 118); font-weight: bold;\">美元</a>，环比减少337亿美元。毫无意外的是美国国债最大的抛售国，这也是自2013年以来规模最大的减仓。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">尽管在与美国的贸易中都是处在顺差的地位，但是中国在2011年7月开始停止购入美国国债，并开始成为美国国债的净卖出国。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">根据美国财政部上周发布的估算数据，中国在2015年8月至今年8月间出售约折合5700亿美元的外汇资产来防止<a href=\"http://app.finance.ifeng.com/hq/rmb/list.php\" target=\"_blank\" style=\"text-decoration: none; color: rgb(0, 66, 118); font-weight: bold;\">人民币</a>大幅贬值。中国<a href=\"http://app.finance.ifeng.com/data/mac/month_idx.php?type=016&symbol=01602\" target=\"_blank\" style=\"text-decoration: none; color: rgb(0, 66, 118); font-weight: bold;\">外汇储备</a>8月减少了160亿美元，降至3.19万亿美元，此前曾在2014年达到近4万亿美元的峰值。今年9月，中国<a href=\"http://app.finance.ifeng.com/data/mac/month_idx.php?type=016&symbol=01602\" target=\"_blank\" style=\"text-decoration: none; color: rgb(0, 66, 118); font-weight: bold;\">外储</a>又下降190亿美元，跌到了2011年以来最低水平。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">上周奥巴马任内最后一次<a href=\"http://app.finance.ifeng.com/hq/rmb/list.php\" target=\"_blank\" style=\"text-decoration: none; color: rgb(0, 66, 118); font-weight: bold;\">汇率</a>报告拒绝给中国贴上汇率操纵国的标签。本周美国政府重申，中国此举的目的在于支持<a href=\"http://app.finance.ifeng.com/hq/rmb/list.php\" target=\"_blank\" style=\"text-decoration: none; color: rgb(0, 66, 118); font-weight: bold;\">人民币</a>汇率，防止本币出现伤害全球经济的快速贬值。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">持有量仅次于中国的日本三个月来首次减持，规模下降106亿美元至1.14万亿美元。沙特阿拉伯的美国国债持仓录得连续第七个月下降，减少至930亿美元。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">财政部发布的报告亦包括了国际资本流动数据，显示美国8月份长期投资组合证券净流入483亿美元。美国同期跨境投资流入738亿美元，其中包括国库券和股票互换等短期证券品种。报告还显示，8月外资净卖出美国国债248亿美元，净买入美国股票27.3亿美元、企业债券228亿美元和296亿美元的机构债券。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">具体数据如下：</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">中国持有1.19万亿美元美国国债，环比下降337亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">比利时持有1570亿美元美国国债，环比增加26亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">俄罗斯持有875亿美元美国国债，环比下降7亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">日本持有1.14万亿美元美国国债，环比下降106亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">开曼群岛持有2642亿美元美国国债，环比下降1亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">沙特持有930亿美元美国国债，环比下降35亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">外资净卖出美国国债248亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">外资净买入美国股票27亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">外资净买入企业债券228亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">外资净买入机构债券296亿美元</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">越来越明显的是，外国央行、主权财富基金、基金经理以及其他持有美国国债的官方机构都在以前所未有的速度抛售美国国债。一些国家，例如中国是为了抵消本国货币贬值的压力；其他国家，例如沙特阿拉伯是为了抵消石油美元贬值而提供资本以及填补本国高涨的财政赤字。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\"><strong>谁在买美国国债？</strong></p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">那么抛售的美国国债卖给了谁？至少当前的答案是个人投资者，就像股市中的散户一样，个人投资者成了接盘的人。个人投资者吸收了上百亿央行持有的美国国债。我们好奇，接盘侠们是否知道接的是谁的盘。</p><p style=\"margin-top: 0px; margin-bottom: 25px; padding: 0px; text-indent: 28px; font-size: 14px; color: rgb(43, 43, 43); font-family: simsun, arial, helvetica, clean, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">下图显示的是不同周期发行的美国国债规模以及买家。很明显，最近时期是外国投资者开始减少购入美国国债以及美联储停止了量化宽松计划。</p><p><br/></p>',
                'art_time' => 1476865799,
                'art_editor' => '刘德华',
                'art_view' => 5,
                'cate_id' => 6,
            ),

            array(
                'art_id' => 11,
                'art_title' => '越南人评最美亚洲面孔 赵丽颖第1杨幂第4',
                'art_tag' => '越南人.亚洲面孔.赵丽颖.杨幂',
                'art_description' => '靠颜值说话已经在娱乐圈屡见不鲜，各路女星不仅要在影视剧里争夺最美，在现实生活中，也不能输给对方',
                'art_thumb' => '/uploads/20161019163027443.jpg',
                'art_content' => '<p style=\"text-indent: 2em;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px;\">靠颜值说话已经在娱乐圈屡见不鲜，各路女星不仅要在影视剧里争夺最美，在现实生活中，也不能输给对方。近日，又有新的亚洲十大女神排行榜新鲜出炉。其中，意料之中，内地两位当红女星赵丽颖和郑爽也榜上有名，不过相差甚远。当然也有韩国艺人，如林允儿、朴信惠等。当然，这些排名自然没有特定标准，所以也没有太大的实际意义，观众们当做娱乐就行，不必太较真，一起来看看排行榜吧。“神仙姐姐”刘亦菲和韩国的朴信惠分别位列第10、9位。</span></p><p style=\"text-indent: 2em;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px;\">第七和第八分别是郑爽和宋智孝。虽然感情一直波折不断的郑爽，作品却一路走红，特别是在最近的《微微一笑很倾城》中搭档杨洋，真是养眼。韩国的智孝欧尼是通过某综艺节目而人气暴涨的，其古灵精怪的性格和温和大方的气度很受人喜欢。</span></span></p>',
                'art_time' => 1476865883,
                'art_editor' => '路飞',
                'art_view' => 13,
                'cate_id' => 1,
            ),

            array(
                'art_id' => 12,
                'art_title' => '不看不知道 原来这些东西放车上会被罚款的',
                'art_tag' => '罚款',
                'art_description' => '不看不知道 原来这些东西放车上会被罚款的',
                'art_thumb' => '/uploads/20161019163541700.jpg',
                'art_content' => '<p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">现在对人们来说，有关汽车的事方方面面都是大事。许多人们都喜欢在自己的车上摆写小玩偶装饰自己的车，殊不知这样的行为极有可能是违纪的，因为这些小玩偶会对自己的开车造成阻碍。另外有些东西也是不允许摆放在车上的，今天我们就来盘点一下有哪些物品是车上禁放物品。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　<strong>安全带限位器</strong></p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　有些人因为安全带勒在身上不舒服便在安全带上加装了一个安全带限位器。但是这是交通规则中所不允许的，一旦车子遇到什么紧急情况时，加了安全带限位器的安全带就完全失去了它的作用。</p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　<strong>打火机</strong></p><p style=\"margin: 23px auto 0px; padding: 0px; list-style: none; font-size: 14px; line-height: 26px; font-family: SimSun; color: rgb(43, 43, 43); white-space: normal; overflow: visible !important;\">　　相信对许多人尤其是喜欢抽烟的人们来说，打火机出现在他们的车子中是很平常的事，打完火之后就随手扔在了中控台上。但其实这样是很危险的，打火机被太阳直射后可能引起爆炸</p><p><br/></p>',
                'art_time' => 1476866165,
                'art_editor' => '张益达',
                'art_view' => 0,
                'cate_id' => 6,
            ),

            array(
                'art_id' => 13,
                'art_title' => '62名小学生挤在一个班里上课 学校称老师不够',
                'art_tag' => '62名小学生.老师不够',
                'art_description' => '62名小学生挤在一个班里上课 学校称老师不够',
                'art_thumb' => '/uploads/20161019173632164.jpg',
                'art_content' => '<p style=\"margin-top: 20px; margin-bottom: 20px; padding: 0px; border: none; line-height: 24px; font-size: 14px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">楚天都市报讯（记者刘孝斌）昨日，武汉市蔡甸区侏儒街成功中心小学一年级两个班共62名学生，突然合成一个班级，挤在一间教室上课，有家长反映，62名学生和62套课桌椅挤在一起，孩子们进出都困难。</p><p style=\"margin-top: 20px; margin-bottom: 20px; padding: 0px; border: none; line-height: 24px; font-size: 14px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　昨日下午1时许，楚天都市报记者在该校看到，一年级有两个教室，一年级（二）班的教室内已没有课桌和学生。在隔壁的一年级（一）班教室内，学生们正在午休。教室里课桌被分成3大块，左右靠墙的部分两张课桌并列，中间四张课桌并列成一排，中间仅留有两条勉强走人的走道。</p><p style=\"margin-top: 20px; margin-bottom: 20px; padding: 0px; border: none; line-height: 24px; font-size: 14px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　此前，周女士也向本报反映，她的孙女在该校读三年级，国庆长假之后，学校将三年级两个班51人合在一起上课，她担心老师根本忙不过来。</p><p style=\"margin-top: 20px; margin-bottom: 20px; padding: 0px; border: none; line-height: 24px; font-size: 14px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　该校校长周召平解释，将一年级、三年级的班级合并，是不得已而为之的临时性举措。今年5月底，一名50岁的老师因病去世。9月底开学之后，又有一名老师突发疾病去世。再加上有老师离职和调走，学校老师不够。目前，学校总共只有23名老师，其中包括两名即将回家生小孩的女老师。23人中，9人是通过返聘、志愿者、支教等方式请来的老师。之前学校一共有11个班级，按照国家规定的课程，老师安排不过来，只得将人数最少的三年级合并，又将一年级合并，现在勉强可以保证合并后9个班级共377名学生的教学，能按照国家要求开设所有课程。</p><p style=\"margin-top: 20px; margin-bottom: 20px; padding: 0px; border: none; line-height: 24px; font-size: 14px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　侏儒街教育办公室负责人表示，已接到学校反映。目前，整个街道所辖的14所中小学差10多名老师，正在采取包括返聘、招募志愿者等方式解决。昨日，武汉市教育局发布了招募选派高校毕业生到农村义务教育学校从事志愿服务工作的公告，全市计划招募146名志愿者，有意向的大学生可登录武汉人事考试网报名。</p><p style=\"margin-top: 20px; margin-bottom: 20px; padding: 0px; border: none; line-height: 24px; font-size: 14px; color: rgb(51, 51, 51); font-family: 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　在记者的建议下，成功中心小学将于今日召开家长会，向家长解释相关情况。周召平表示，如果招募到合适的志愿者，将会马上把合并的班级分开。</p><p><br/></p>',
                'art_time' => 1476866278,
                'art_editor' => '胡一菲',
                'art_view' => 0,
                'cate_id' => 1,
            ),

        ));
        DB::table('blog_category')->insert(array(
            
            array(
                'cate_id' => 1,
                'cate_name' => '新闻',
                'cate_title' => '最新！最全的新闻资讯',
                'cate_keywords' => '新闻，个人新闻，个人博客',
                'cate_description' => '最新！最全的新闻资讯，最新！最全的新闻资讯',
                'cate_view' => 1,
                'cate_order' => 3,
                'cate_pid' => 0,
            ),

            array(
                'cate_id' => 2,
                'cate_name' => '体育',
                'cate_title' => '全民健身',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_view' => 0,
                'cate_order' => 2,
                'cate_pid' => 0,
            ),

            array(
                'cate_id' => 3,
                'cate_name' => '娱乐',
                'cate_title' => '各大媒体八卦',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_view' => 0,
                'cate_order' => 0,
                'cate_pid' => 0,
            ),

            array(
                'cate_id' => 5,
                'cate_name' => '新闻联播',
                'cate_title' => '全集高清视频在线观看',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_view' => 0,
                'cate_order' => 0,
                'cate_pid' => 1,
            ),

            array(
                'cate_id' => 6,
                'cate_name' => '搜狐体育',
                'cate_title' => '搜狐体育-搜狐',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_view' => 0,
                'cate_order' => 0,
                'cate_pid' => 2,
            ),

            array(
                'cate_id' => 7,
                'cate_name' => 'sina体育',
                'cate_title' => '2016年里约奥运会_新浪奥运',
                'cate_keywords' => NULL,
                'cate_description' => NULL,
                'cate_view' => 0,
                'cate_order' => 0,
                'cate_pid' => 2,
            ),

            array(
                'cate_id' => 8,
                'cate_name' => '娱乐风向标',
                'cate_title' => '娱乐风向标',
                'cate_keywords' => '娱乐风向标娱乐风向',
                'cate_description' => '娱乐风向标娱乐风向标',
                'cate_view' => 0,
                'cate_order' => 8,
                'cate_pid' => 3,
            ),

            array(
                'cate_id' => 9,
                'cate_name' => '娱乐娱乐',
                'cate_title' => '娱乐娱乐娱乐娱乐',
                'cate_keywords' => '娱乐娱乐娱乐娱乐',
                'cate_description' => '娱乐娱乐娱乐娱乐',
                'cate_view' => 0,
                'cate_order' => 9,
                'cate_pid' => 3,
            ),

        ));
        DB::table('blog_config')->insert(array(
            
            array(
                'conf_id' => 2,
                'conf_title' => '网站标题',
                'conf_name' => 'web_title',
                'conf_content' => 'Blog博客系统',
                'conf_order' => 0,
                'conf_tips' => '这是一个网站标题~',
                'field_type' => 'input',
                'field_value' => NULL,
            ),

            array(
                'conf_id' => 3,
                'conf_title' => '统计代码',
                'conf_name' => 'code_count',
                'conf_content' => '百度统计',
                'conf_order' => 3,
                'conf_tips' => '统计网站代码情况',
                'field_type' => 'textarea',
                'field_value' => NULL,
            ),

            array(
                'conf_id' => 5,
                'conf_title' => '网站状态',
                'conf_name' => 'web_status',
                'conf_content' => 1,
                'conf_order' => 2,
                'conf_tips' => '网站开启状态 格式：1|开启 2|关闭',
                'field_type' => 'radio',
                'field_value' => '1|开启,2|关闭',
            ),

            array(
                'conf_id' => 7,
                'conf_title' => '辅助标题',
                'conf_name' => 'seo_title',
                'conf_content' => '门豪鹏个人博客',
                'conf_order' => 1,
                'conf_tips' => '对网站名称的补充',
                'field_type' => 'input',
                'field_value' => NULL,
            ),

            array(
                'conf_id' => 8,
                'conf_title' => '关键词',
                'conf_name' => 'keywords',
                'conf_content' => '个人.个人网站.个人博客.门豪鹏.博客.博客系统',
                'conf_order' => 4,
                'conf_tips' => NULL,
                'field_type' => 'input',
                'field_value' => NULL,
            ),

            array(
                'conf_id' => 9,
                'conf_title' => '描述',
                'conf_name' => 'description',
                'conf_content' => '使用Laravel框架做的第一个个人博客系统。',
                'conf_order' => 5,
                'conf_tips' => NULL,
                'field_type' => 'textarea',
                'field_value' => NULL,
            ),

            array(
                'conf_id' => 10,
                'conf_title' => '版权信息',
                'conf_name' => 'copyright',
                'conf_content' => 'Design by 个人博客 <a href=\"http://www.baidu.com\" target=\"_block\">http://www.baidu.com</a>',
                'conf_order' => 6,
                'conf_tips' => NULL,
                'field_type' => 'textarea',
                'field_value' => NULL,
            ),

        ));
        DB::table('blog_links')->insert(array(
            
            array(
                'link_id' => 1,
                'link_name' => '百度',
                'link_title' => '百度一下，你就知道',
                'link_url' => 'https://www.baidu.com/',
                'link_order' => 1,
            ),

            array(
                'link_id' => 2,
                'link_name' => '知乎',
                'link_title' => '与世界分享你的知识、经验和见解',
                'link_url' => 'https://www.zhihu.com/',
                'link_order' => 2,
            ),

            array(
                'link_id' => 3,
                'link_name' => '腾讯',
                'link_title' => '中国浏览量最大的中文门户网站',
                'link_url' => 'http://www.qq.com/',
                'link_order' => 0,
            ),

        ));
        DB::table('blog_migrations')->insert(array(
            
            array(
                'migration' => '2016_10_20_162228_create_links_table',
                'batch' => 1,
            )

        ));
        DB::table('blog_navs')->insert(array(
            
            array(
                'nav_id' => 1,
                'nav_name' => '首页',
                'nav_alias' => 'Protal',
                'nav_url' => '/',
                'nav_order' => 0,
            ),

            array(
                'nav_id' => 2,
                'nav_name' => '关于我',
                'nav_alias' => 'About',
                'nav_url' => 'http://www.qq.com',
                'nav_order' => 1,
            ),

            array(
                'nav_id' => 4,
                'nav_name' => '慢生活',
                'nav_alias' => 'Life',
                'nav_url' => 'http://',
                'nav_order' => 2,
            ),

            array(
                'nav_id' => 5,
                'nav_name' => '碎言碎语',
                'nav_alias' => 'Doing',
                'nav_url' => 'http://',
                'nav_order' => 3,
            ),

            array(
                'nav_id' => 6,
                'nav_name' => '模板分享',
                'nav_alias' => 'Share',
                'nav_url' => 'http://',
                'nav_order' => 4,
            ),

            array(
                'nav_id' => 7,
                'nav_name' => '学无止境',
                'nav_alias' => 'Learn',
                'nav_url' => 'http://',
                'nav_order' => 5,
            ),

            array(
                'nav_id' => 8,
                'nav_name' => '留言版',
                'nav_alias' => 'Gustbook',
                'nav_url' => 'http://',
                'nav_order' => 6,
            ),

        ));
        DB::table('blog_user')->insert(array(
            
            array(
                'user_id' => 1,
                'username' => 'admin',
                'password' => 'eyJpdiI6IlRKWlVCSDhkMjYzZUgyS29SMkJXR0E9PSIsInZhbHVlIjoiN2htcmdVMXJscTFlMFcxTzJjZ0ttdz09IiwibWFjIjoiNTUzM2UyZGZhZjIyOWJmYWU0YTY5MGM1NTRiYTcyNDU2ZmExZGQ4ODlmNzhmYzk2MmJmZWQ2NDRiODdhN2QzNCJ9',
            )

        ));
    }
}