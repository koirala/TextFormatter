<?php

/*
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2015 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Plugins\Emoji;

use s9e\TextFormatter\Plugins\ParserBase;

class Parser extends ParserBase
{
	protected static $map = ['#⃣'=>'0023-20E3','0⃣'=>'0030-20E3','1⃣'=>'0031-20E3','2⃣'=>'0032-20E3','3⃣'=>'0033-20E3','4⃣'=>'0034-20E3','5⃣'=>'0035-20E3','6⃣'=>'0036-20E3','7⃣'=>'0037-20E3','8⃣'=>'0038-20E3','9⃣'=>'0039-20E3',':100:'=>'1F4AF',':1234:'=>'1F522',':8ball:'=>'1F3B1',':a:'=>'1F170',':ab:'=>'1F18E',':abc:'=>'1F524',':abcd:'=>'1F521',':ac:'=>'1F1E6-1F1E8',':accept:'=>'1F251',':ad:'=>'1F1E6-1F1E9',':ae:'=>'1F1E6-1F1EA',':aerial_tramway:'=>'1F6A1',':af:'=>'1F1E6-1F1EB',':ag:'=>'1F1E6-1F1EC',':ai:'=>'1F1E6-1F1EE',':airplane:'=>'2708',':al:'=>'1F1E6-1F1F1',':alarm_clock:'=>'23F0',':alien:'=>'1F47D',':am:'=>'1F1E6-1F1F2',':ambulance:'=>'1F691',':anchor:'=>'2693',':angel:'=>'1F47C',':anger:'=>'1F4A2',':angry:'=>'1F620',':anguished:'=>'1F627',':ant:'=>'1F41C',':ao:'=>'1F1E6-1F1F4',':apple:'=>'1F34E',':aquarius:'=>'2652',':ar:'=>'1F1E6-1F1F7',':aries:'=>'2648',':arrow_backward:'=>'25C0',':arrow_double_down:'=>'23EC',':arrow_double_up:'=>'23EB',':arrow_down:'=>'2B07',':arrow_down_small:'=>'1F53D',':arrow_forward:'=>'25B6',':arrow_heading_down:'=>'2935',':arrow_heading_up:'=>'2934',':arrow_left:'=>'2B05',':arrow_lower_left:'=>'2199',':arrow_lower_right:'=>'2198',':arrow_right:'=>'27A1',':arrow_right_hook:'=>'21AA',':arrow_up:'=>'2B06',':arrow_up_down:'=>'2195',':arrow_up_small:'=>'1F53C',':arrow_upper_left:'=>'2196',':arrow_upper_right:'=>'2197',':arrows_clockwise:'=>'1F503',':arrows_counterclockwise:'=>'1F504',':art:'=>'1F3A8',':articulated_lorry:'=>'1F69B',':astonished:'=>'1F632',':at:'=>'1F1E6-1F1F9',':athletic_shoe:'=>'1F45F',':atm:'=>'1F3E7',':au:'=>'1F1E6-1F1FA',':aw:'=>'1F1E6-1F1FC',':az:'=>'1F1E6-1F1FF',':b:'=>'1F171',':ba:'=>'1F1E7-1F1E6',':baby:'=>'1F476',':baby_bottle:'=>'1F37C',':baby_chick:'=>'1F424',':baby_symbol:'=>'1F6BC',':back:'=>'1F519',':baggage_claim:'=>'1F6C4',':balloon:'=>'1F388',':ballot_box_with_check:'=>'2611',':bamboo:'=>'1F38D',':banana:'=>'1F34C',':bangbang:'=>'203C',':bank:'=>'1F3E6',':bar_chart:'=>'1F4CA',':barber:'=>'1F488',':baseball:'=>'26BE',':basketball:'=>'1F3C0',':bath:'=>'1F6C0',':bathtub:'=>'1F6C1',':battery:'=>'1F50B',':bb:'=>'1F1E7-1F1E7',':bd:'=>'1F1E7-1F1E9',':be:'=>'1F1E7-1F1EA',':bear:'=>'1F43B',':bee:'=>'1F41D',':beer:'=>'1F37A',':beers:'=>'1F37B',':beetle:'=>'1F41E',':beginner:'=>'1F530',':bell:'=>'1F514',':bento:'=>'1F371',':bf:'=>'1F1E7-1F1EB',':bg:'=>'1F1E7-1F1EC',':bh:'=>'1F1E7-1F1ED',':bi:'=>'1F1E7-1F1EE',':bicyclist:'=>'1F6B4',':bike:'=>'1F6B2',':bikini:'=>'1F459',':bird:'=>'1F426',':birthday:'=>'1F382',':bj:'=>'1F1E7-1F1EF',':black_circle:'=>'26AB',':black_joker:'=>'1F0CF',':black_large_square:'=>'2B1B',':black_medium_small_square:'=>'25FE',':black_medium_square:'=>'25FC',':black_nib:'=>'2712',':black_small_square:'=>'25AA',':black_square_button:'=>'1F532',':blossom:'=>'1F33C',':blowfish:'=>'1F421',':blue_book:'=>'1F4D8',':blue_car:'=>'1F699',':blue_heart:'=>'1F499',':blush:'=>'1F60A',':bm:'=>'1F1E7-1F1F2',':bn:'=>'1F1E7-1F1F3',':bo:'=>'1F1E7-1F1F4',':boar:'=>'1F417',':bomb:'=>'1F4A3',':book:'=>'1F4D6',':bookmark:'=>'1F516',':bookmark_tabs:'=>'1F4D1',':books:'=>'1F4DA',':boom:'=>'1F4A5',':boot:'=>'1F462',':bouquet:'=>'1F490',':bow:'=>'1F647',':bowling:'=>'1F3B3',':boy:'=>'1F466',':br:'=>'1F1E7-1F1F7',':bread:'=>'1F35E',':bride_with_veil:'=>'1F470',':bridge_at_night:'=>'1F309',':briefcase:'=>'1F4BC',':broken_heart:'=>'1F494',':bs:'=>'1F1E7-1F1F8',':bt:'=>'1F1E7-1F1F9',':bug:'=>'1F41B',':bulb:'=>'1F4A1',':bullettrain_front:'=>'1F685',':bullettrain_side:'=>'1F684',':bus:'=>'1F68C',':busstop:'=>'1F68F',':bust_in_silhouette:'=>'1F464',':busts_in_silhouette:'=>'1F465',':bw:'=>'1F1E7-1F1FC',':by:'=>'1F1E7-1F1FE',':bz:'=>'1F1E7-1F1FF',':ca:'=>'1F1E8-1F1E6',':cactus:'=>'1F335',':cake:'=>'1F370',':calendar:'=>'1F4C6',':calling:'=>'1F4F2',':camel:'=>'1F42B',':camera:'=>'1F4F7',':cancer:'=>'264B',':candy:'=>'1F36C',':capital_abcd:'=>'1F520',':capricorn:'=>'2651',':card_index:'=>'1F4C7',':carousel_horse:'=>'1F3A0',':cat2:'=>'1F408',':cat:'=>'1F431',':cd:'=>'1F1E8-1F1E9',':cf:'=>'1F1E8-1F1EB',':cg:'=>'1F1E8-1F1EC',':ch:'=>'1F1E8-1F1ED',':chart:'=>'1F4B9',':chart_with_downwards_trend:'=>'1F4C9',':chart_with_upwards_trend:'=>'1F4C8',':checkered_flag:'=>'1F3C1',':cherries:'=>'1F352',':cherry_blossom:'=>'1F338',':chestnut:'=>'1F330',':chicken:'=>'1F414',':children_crossing:'=>'1F6B8',':chocolate_bar:'=>'1F36B',':christmas_tree:'=>'1F384',':church:'=>'26EA',':ci:'=>'1F1E8-1F1EE',':cinema:'=>'1F3A6',':circus_tent:'=>'1F3AA',':city_dusk:'=>'1F306',':city_sunset:'=>'1F307',':cl:'=>'1F1E8-1F1F1',':clap:'=>'1F44F',':clapper:'=>'1F3AC',':clipboard:'=>'1F4CB',':clock1030:'=>'1F565',':clock10:'=>'1F559',':clock1130:'=>'1F566',':clock11:'=>'1F55A',':clock1230:'=>'1F567',':clock12:'=>'1F55B',':clock130:'=>'1F55C',':clock1:'=>'1F550',':clock230:'=>'1F55D',':clock2:'=>'1F551',':clock330:'=>'1F55E',':clock3:'=>'1F552',':clock430:'=>'1F55F',':clock4:'=>'1F553',':clock530:'=>'1F560',':clock5:'=>'1F554',':clock630:'=>'1F561',':clock6:'=>'1F555',':clock730:'=>'1F562',':clock7:'=>'1F556',':clock830:'=>'1F563',':clock8:'=>'1F557',':clock930:'=>'1F564',':clock9:'=>'1F558',':closed_book:'=>'1F4D5',':closed_lock_with_key:'=>'1F510',':closed_umbrella:'=>'1F302',':cloud:'=>'2601',':clubs:'=>'2663',':cm:'=>'1F1E8-1F1F2',':cn:'=>'1F1E8-1F1F3',':co:'=>'1F1E8-1F1F4',':cocktail:'=>'1F378',':coffee:'=>'2615',':cold_sweat:'=>'1F630',':computer:'=>'1F4BB',':confetti_ball:'=>'1F38A',':confounded:'=>'1F616',':confused:'=>'1F615',':congratulations:'=>'3297',':construction:'=>'1F6A7',':construction_worker:'=>'1F477',':convenience_store:'=>'1F3EA',':cookie:'=>'1F36A',':cool:'=>'1F192',':cop:'=>'1F46E',':copyright:'=>'00A9',':corn:'=>'1F33D',':couple:'=>'1F46B',':couple_with_heart:'=>'1F491',':couplekiss:'=>'1F48F',':cow2:'=>'1F404',':cow:'=>'1F42E',':cr:'=>'1F1E8-1F1F7',':credit_card:'=>'1F4B3',':crescent_moon:'=>'1F319',':crocodile:'=>'1F40A',':crossed_flags:'=>'1F38C',':crown:'=>'1F451',':cry:'=>'1F622',':crying_cat_face:'=>'1F63F',':crystal_ball:'=>'1F52E',':cu:'=>'1F1E8-1F1FA',':cupid:'=>'1F498',':curly_loop:'=>'27B0',':currency_exchange:'=>'1F4B1',':curry:'=>'1F35B',':custard:'=>'1F36E',':customs:'=>'1F6C3',':cv:'=>'1F1E8-1F1FB',':cy:'=>'1F1E8-1F1FE',':cyclone:'=>'1F300',':cz:'=>'1F1E8-1F1FF',':dancer:'=>'1F483',':dancers:'=>'1F46F',':dango:'=>'1F361',':dart:'=>'1F3AF',':dash:'=>'1F4A8',':date:'=>'1F4C5',':de:'=>'1F1E9-1F1EA',':deciduous_tree:'=>'1F333',':department_store:'=>'1F3EC',':diamond_shape_with_a_dot_inside:'=>'1F4A0',':diamonds:'=>'2666',':disappointed:'=>'1F61E',':disappointed_relieved:'=>'1F625',':dizzy:'=>'1F4AB',':dizzy_face:'=>'1F635',':dj:'=>'1F1E9-1F1EF',':dk:'=>'1F1E9-1F1F0',':dm:'=>'1F1E9-1F1F2',':do:'=>'1F1E9-1F1F4',':do_not_litter:'=>'1F6AF',':dog2:'=>'1F415',':dog:'=>'1F436',':dollar:'=>'1F4B5',':dolls:'=>'1F38E',':dolphin:'=>'1F42C',':door:'=>'1F6AA',':doughnut:'=>'1F369',':dragon:'=>'1F409',':dragon_face:'=>'1F432',':dress:'=>'1F457',':dromedary_camel:'=>'1F42A',':droplet:'=>'1F4A7',':dvd:'=>'1F4C0',':dz:'=>'1F1E9-1F1FF',':e-mail:'=>'1F4E7',':ear:'=>'1F442',':ear_of_rice:'=>'1F33E',':earth_africa:'=>'1F30D',':earth_americas:'=>'1F30E',':earth_asia:'=>'1F30F',':ec:'=>'1F1EA-1F1E8',':ee:'=>'1F1EA-1F1EA',':eg:'=>'1F1EA-1F1EC',':egg:'=>'1F373',':eggplant:'=>'1F346',':eh:'=>'1F1EA-1F1ED',':eight:'=>'0038-20E3',':eight_pointed_black_star:'=>'2734',':eight_spoked_asterisk:'=>'2733',':electric_plug:'=>'1F50C',':elephant:'=>'1F418',':end:'=>'1F51A',':envelope:'=>'2709',':envelope_with_arrow:'=>'1F4E9',':er:'=>'1F1EA-1F1F7',':es:'=>'1F1EA-1F1F8',':et:'=>'1F1EA-1F1F9',':euro:'=>'1F4B6',':european_castle:'=>'1F3F0',':european_post_office:'=>'1F3E4',':evergreen_tree:'=>'1F332',':exclamation:'=>'2757',':expressionless:'=>'1F611',':eyeglasses:'=>'1F453',':eyes:'=>'1F440',':factory:'=>'1F3ED',':fallen_leaf:'=>'1F342',':family:'=>'1F46A',':fast_forward:'=>'23E9',':fax:'=>'1F4E0',':fearful:'=>'1F628',':feet:'=>'1F43E',':ferris_wheel:'=>'1F3A1',':fi:'=>'1F1EB-1F1EE',':file_folder:'=>'1F4C1',':fire:'=>'1F525',':fire_engine:'=>'1F692',':fireworks:'=>'1F386',':first_quarter_moon:'=>'1F313',':first_quarter_moon_with_face:'=>'1F31B',':fish:'=>'1F41F',':fish_cake:'=>'1F365',':fishing_pole_and_fish:'=>'1F3A3',':fist:'=>'270A',':five:'=>'0035-20E3',':fj:'=>'1F1EB-1F1EF',':fk:'=>'1F1EB-1F1F0',':flags:'=>'1F38F',':flashlight:'=>'1F526',':floppy_disk:'=>'1F4BE',':flower_playing_cards:'=>'1F3B4',':flushed:'=>'1F633',':fm:'=>'1F1EB-1F1F2',':fo:'=>'1F1EB-1F1F4',':foggy:'=>'1F301',':football:'=>'1F3C8',':footprints:'=>'1F463',':fork_and_knife:'=>'1F374',':fountain:'=>'26F2',':four:'=>'0034-20E3',':four_leaf_clover:'=>'1F340',':fr:'=>'1F1EB-1F1F7',':free:'=>'1F193',':fried_shrimp:'=>'1F364',':fries:'=>'1F35F',':frog:'=>'1F438',':frowning:'=>'1F626',':fuelpump:'=>'26FD',':full_moon:'=>'1F315',':full_moon_with_face:'=>'1F31D',':ga:'=>'1F1EC-1F1E6',':game_die:'=>'1F3B2',':gb:'=>'1F1EC-1F1E7',':gd:'=>'1F1EC-1F1E9',':ge:'=>'1F1EC-1F1EA',':gem:'=>'1F48E',':gemini:'=>'264A',':gh:'=>'1F1EC-1F1ED',':ghost:'=>'1F47B',':gi:'=>'1F1EC-1F1EE',':gift:'=>'1F381',':gift_heart:'=>'1F49D',':girl:'=>'1F467',':gl:'=>'1F1EC-1F1F1',':globe_with_meridians:'=>'1F310',':gm:'=>'1F1EC-1F1F2',':gn:'=>'1F1EC-1F1F3',':goat:'=>'1F410',':golf:'=>'26F3',':gq:'=>'1F1EC-1F1F6',':gr:'=>'1F1EC-1F1F7',':grapes:'=>'1F347',':green_apple:'=>'1F34F',':green_book:'=>'1F4D7',':green_heart:'=>'1F49A',':grey_exclamation:'=>'2755',':grey_question:'=>'2754',':grimacing:'=>'1F62C',':grin:'=>'1F601',':grinning:'=>'1F600',':gt:'=>'1F1EC-1F1F9',':gu:'=>'1F1EC-1F1FA',':guardsman:'=>'1F482',':guitar:'=>'1F3B8',':gun:'=>'1F52B',':gw:'=>'1F1EC-1F1FC',':gy:'=>'1F1EC-1F1FE',':haircut:'=>'1F487',':hamburger:'=>'1F354',':hammer:'=>'1F528',':hamster:'=>'1F439',':handbag:'=>'1F45C',':hash:'=>'0023-20E3',':hatched_chick:'=>'1F425',':hatching_chick:'=>'1F423',':headphones:'=>'1F3A7',':hear_no_evil:'=>'1F649',':heart:'=>'2764',':heart_decoration:'=>'1F49F',':heart_eyes:'=>'1F60D',':heart_eyes_cat:'=>'1F63B',':heartbeat:'=>'1F493',':heartpulse:'=>'1F497',':hearts:'=>'2665',':heavy_check_mark:'=>'2714',':heavy_division_sign:'=>'2797',':heavy_dollar_sign:'=>'1F4B2',':heavy_minus_sign:'=>'2796',':heavy_multiplication_x:'=>'2716',':heavy_plus_sign:'=>'2795',':helicopter:'=>'1F681',':herb:'=>'1F33F',':hibiscus:'=>'1F33A',':high_brightness:'=>'1F506',':high_heel:'=>'1F460',':hk:'=>'1F1ED-1F1F0',':hn:'=>'1F1ED-1F1F3',':honey_pot:'=>'1F36F',':horse:'=>'1F434',':horse_racing:'=>'1F3C7',':hospital:'=>'1F3E5',':hotel:'=>'1F3E8',':hotsprings:'=>'2668',':hourglass:'=>'231B',':hourglass_flowing_sand:'=>'23F3',':house:'=>'1F3E0',':house_with_garden:'=>'1F3E1',':hr:'=>'1F1ED-1F1F7',':ht:'=>'1F1ED-1F1F9',':hu:'=>'1F1ED-1F1FA',':hushed:'=>'1F62F',':ice_cream:'=>'1F368',':icecream:'=>'1F366',':id:'=>'1F1EE-1F1E9',':ideograph_advantage:'=>'1F250',':ie:'=>'1F1EE-1F1EA',':il:'=>'1F1EE-1F1F1',':imp:'=>'1F47F',':in:'=>'1F1EE-1F1F3',':inbox_tray:'=>'1F4E5',':incoming_envelope:'=>'1F4E8',':information_desk_person:'=>'1F481',':information_source:'=>'2139',':innocent:'=>'1F607',':interrobang:'=>'2049',':iphone:'=>'1F4F1',':iq:'=>'1F1EE-1F1F6',':ir:'=>'1F1EE-1F1F7',':is:'=>'1F1EE-1F1F8',':it:'=>'1F1EE-1F1F9',':izakaya_lantern:'=>'1F3EE',':jack_o_lantern:'=>'1F383',':japan:'=>'1F5FE',':japanese_castle:'=>'1F3EF',':japanese_goblin:'=>'1F47A',':japanese_ogre:'=>'1F479',':je:'=>'1F1EF-1F1EA',':jeans:'=>'1F456',':jm:'=>'1F1EF-1F1F2',':jo:'=>'1F1EF-1F1F4',':joy:'=>'1F602',':joy_cat:'=>'1F639',':jp:'=>'1F1EF-1F1F5',':ke:'=>'1F1F0-1F1EA',':key:'=>'1F511',':keycap_ten:'=>'1F51F',':kg:'=>'1F1F0-1F1EC',':kh:'=>'1F1F0-1F1ED',':ki:'=>'1F1F0-1F1EE',':kimono:'=>'1F458',':kiss:'=>'1F48B',':kissing:'=>'1F617',':kissing_cat:'=>'1F63D',':kissing_closed_eyes:'=>'1F61A',':kissing_heart:'=>'1F618',':kissing_smiling_eyes:'=>'1F619',':km:'=>'1F1F0-1F1F2',':kn:'=>'1F1F0-1F1F3',':knife:'=>'1F52A',':koala:'=>'1F428',':koko:'=>'1F201',':kp:'=>'1F1F0-1F1F5',':kr:'=>'1F1F0-1F1F7',':kw:'=>'1F1F0-1F1FC',':ky:'=>'1F1F0-1F1FE',':kz:'=>'1F1F0-1F1FF',':la:'=>'1F1F1-1F1E6',':large_blue_circle:'=>'1F535',':large_blue_diamond:'=>'1F537',':large_orange_diamond:'=>'1F536',':last_quarter_moon:'=>'1F317',':last_quarter_moon_with_face:'=>'1F31C',':laughing:'=>'1F606',':lb:'=>'1F1F1-1F1E7',':lc:'=>'1F1F1-1F1E8',':leaves:'=>'1F343',':ledger:'=>'1F4D2',':left_luggage:'=>'1F6C5',':left_right_arrow:'=>'2194',':leftwards_arrow_with_hook:'=>'21A9',':lemon:'=>'1F34B',':leo:'=>'264C',':leopard:'=>'1F406',':li:'=>'1F1F1-1F1EE',':libra:'=>'264E',':light_rail:'=>'1F688',':link:'=>'1F517',':lips:'=>'1F444',':lipstick:'=>'1F484',':lk:'=>'1F1F1-1F1F0',':lock:'=>'1F512',':lock_with_ink_pen:'=>'1F50F',':lollipop:'=>'1F36D',':loop:'=>'27BF',':loud_sound:'=>'1F50A',':loudspeaker:'=>'1F4E2',':love_hotel:'=>'1F3E9',':love_letter:'=>'1F48C',':low_brightness:'=>'1F505',':lr:'=>'1F1F1-1F1F7',':ls:'=>'1F1F1-1F1F8',':lt:'=>'1F1F1-1F1F9',':lu:'=>'1F1F1-1F1FA',':lv:'=>'1F1F1-1F1FB',':ly:'=>'1F1F1-1F1FE',':m:'=>'24C2',':ma:'=>'1F1F2-1F1E6',':mag:'=>'1F50D',':mag_right:'=>'1F50E',':mahjong:'=>'1F004',':mailbox:'=>'1F4EB',':mailbox_closed:'=>'1F4EA',':mailbox_with_mail:'=>'1F4EC',':mailbox_with_no_mail:'=>'1F4ED',':man:'=>'1F468',':man_with_gua_pi_mao:'=>'1F472',':man_with_turban:'=>'1F473',':mans_shoe:'=>'1F45E',':maple_leaf:'=>'1F341',':mask:'=>'1F637',':massage:'=>'1F486',':mc:'=>'1F1F2-1F1E8',':md:'=>'1F1F2-1F1E9',':me:'=>'1F1F2-1F1EA',':meat_on_bone:'=>'1F356',':mega:'=>'1F4E3',':melon:'=>'1F348',':mens:'=>'1F6B9',':metro:'=>'1F687',':mg:'=>'1F1F2-1F1EC',':mh:'=>'1F1F2-1F1ED',':microphone:'=>'1F3A4',':microscope:'=>'1F52C',':milky_way:'=>'1F30C',':minibus:'=>'1F690',':minidisc:'=>'1F4BD',':mk:'=>'1F1F2-1F1F0',':ml:'=>'1F1F2-1F1F1',':mm:'=>'1F1F2-1F1F2',':mn:'=>'1F1F2-1F1F3',':mo:'=>'1F1F2-1F1F4',':mobile_phone_off:'=>'1F4F4',':money_with_wings:'=>'1F4B8',':moneybag:'=>'1F4B0',':monkey:'=>'1F412',':monkey_face:'=>'1F435',':monorail:'=>'1F69D',':mortar_board:'=>'1F393',':mount_fuji:'=>'1F5FB',':mountain_bicyclist:'=>'1F6B5',':mountain_cableway:'=>'1F6A0',':mountain_railway:'=>'1F69E',':mouse2:'=>'1F401',':mouse:'=>'1F42D',':movie_camera:'=>'1F3A5',':moyai:'=>'1F5FF',':mr:'=>'1F1F2-1F1F7',':ms:'=>'1F1F2-1F1F8',':mt:'=>'1F1F2-1F1F9',':mu:'=>'1F1F2-1F1FA',':muscle:'=>'1F4AA',':mushroom:'=>'1F344',':musical_keyboard:'=>'1F3B9',':musical_note:'=>'1F3B5',':musical_score:'=>'1F3BC',':mute:'=>'1F507',':mv:'=>'1F1F2-1F1FB',':mw:'=>'1F1F2-1F1FC',':mx:'=>'1F1F2-1F1FD',':my:'=>'1F1F2-1F1FE',':mz:'=>'1F1F2-1F1FF',':na:'=>'1F1F3-1F1E6',':nail_care:'=>'1F485',':name_badge:'=>'1F4DB',':nc:'=>'1F1F3-1F1E8',':ne:'=>'1F1F3-1F1EA',':necktie:'=>'1F454',':negative_squared_cross_mark:'=>'274E',':neutral_face:'=>'1F610',':new:'=>'1F195',':new_moon:'=>'1F311',':new_moon_with_face:'=>'1F31A',':newspaper:'=>'1F4F0',':ng:'=>'1F1F3-1F1EC',':ni:'=>'1F1F3-1F1EE',':night_with_stars:'=>'1F303',':nine:'=>'0039-20E3',':nl:'=>'1F1F3-1F1F1',':no:'=>'1F1F3-1F1F4',':no_bell:'=>'1F515',':no_bicycles:'=>'1F6B3',':no_entry:'=>'26D4',':no_entry_sign:'=>'1F6AB',':no_good:'=>'1F645',':no_mobile_phones:'=>'1F4F5',':no_mouth:'=>'1F636',':no_pedestrians:'=>'1F6B7',':no_smoking:'=>'1F6AD',':non-potable_water:'=>'1F6B1',':nose:'=>'1F443',':notebook:'=>'1F4D3',':notebook_with_decorative_cover:'=>'1F4D4',':notes:'=>'1F3B6',':np:'=>'1F1F3-1F1F5',':nr:'=>'1F1F3-1F1F7',':nu:'=>'1F1F3-1F1FA',':nut_and_bolt:'=>'1F529',':nz:'=>'1F1F3-1F1FF',':o2:'=>'1F17E',':o:'=>'2B55',':ocean:'=>'1F30A',':octopus:'=>'1F419',':oden:'=>'1F362',':office:'=>'1F3E2',':ok:'=>'1F197',':ok_hand:'=>'1F44C',':ok_woman:'=>'1F646',':older_man:'=>'1F474',':older_woman:'=>'1F475',':om:'=>'1F1F4-1F1F2',':on:'=>'1F51B',':oncoming_automobile:'=>'1F698',':oncoming_bus:'=>'1F68D',':oncoming_police_car:'=>'1F694',':oncoming_taxi:'=>'1F696',':one:'=>'0031-20E3',':open_file_folder:'=>'1F4C2',':open_hands:'=>'1F450',':open_mouth:'=>'1F62E',':ophiuchus:'=>'26CE',':orange_book:'=>'1F4D9',':outbox_tray:'=>'1F4E4',':ox:'=>'1F402',':pa:'=>'1F1F5-1F1E6',':package:'=>'1F4E6',':page_facing_up:'=>'1F4C4',':page_with_curl:'=>'1F4C3',':pager:'=>'1F4DF',':palm_tree:'=>'1F334',':panda_face:'=>'1F43C',':paperclip:'=>'1F4CE',':parking:'=>'1F17F',':part_alternation_mark:'=>'303D',':partly_sunny:'=>'26C5',':passport_control:'=>'1F6C2',':pe:'=>'1F1F5-1F1EA',':peach:'=>'1F351',':pear:'=>'1F350',':pencil2:'=>'270F',':pencil:'=>'1F4DD',':penguin:'=>'1F427',':pensive:'=>'1F614',':performing_arts:'=>'1F3AD',':persevere:'=>'1F623',':person_frowning:'=>'1F64D',':person_with_blond_hair:'=>'1F471',':person_with_pouting_face:'=>'1F64E',':pf:'=>'1F1F5-1F1EB',':pg:'=>'1F1F5-1F1EC',':ph:'=>'1F1F5-1F1ED',':pig2:'=>'1F416',':pig:'=>'1F437',':pig_nose:'=>'1F43D',':pill:'=>'1F48A',':pineapple:'=>'1F34D',':pisces:'=>'2653',':pizza:'=>'1F355',':pk:'=>'1F1F5-1F1F0',':pl:'=>'1F1F5-1F1F1',':point_down:'=>'1F447',':point_left:'=>'1F448',':point_right:'=>'1F449',':point_up:'=>'261D',':point_up_2:'=>'1F446',':police_car:'=>'1F693',':poodle:'=>'1F429',':poop:'=>'1F4A9',':post_office:'=>'1F3E3',':postal_horn:'=>'1F4EF',':postbox:'=>'1F4EE',':potable_water:'=>'1F6B0',':pouch:'=>'1F45D',':poultry_leg:'=>'1F357',':pound:'=>'1F4B7',':pouting_cat:'=>'1F63E',':pr:'=>'1F1F5-1F1F7',':pray:'=>'1F64F',':princess:'=>'1F478',':ps:'=>'1F1F5-1F1F8',':pt:'=>'1F1F5-1F1F9',':punch:'=>'1F44A',':purple_heart:'=>'1F49C',':purse:'=>'1F45B',':pushpin:'=>'1F4CC',':put_litter_in_its_place:'=>'1F6AE',':pw:'=>'1F1F5-1F1FC',':py:'=>'1F1F5-1F1FE',':qa:'=>'1F1F6-1F1E6',':question:'=>'2753',':rabbit2:'=>'1F407',':rabbit:'=>'1F430',':racehorse:'=>'1F40E',':radio:'=>'1F4FB',':radio_button:'=>'1F518',':rage:'=>'1F621',':railway_car:'=>'1F683',':rainbow:'=>'1F308',':raised_hand:'=>'270B',':raised_hands:'=>'1F64C',':raising_hand:'=>'1F64B',':ram:'=>'1F40F',':ramen:'=>'1F35C',':rat:'=>'1F400',':recycle:'=>'267B',':red_car:'=>'1F697',':red_circle:'=>'1F534',':registered:'=>'00AE',':relaxed:'=>'263A',':relieved:'=>'1F60C',':repeat:'=>'1F501',':repeat_one:'=>'1F502',':restroom:'=>'1F6BB',':revolving_hearts:'=>'1F49E',':rewind:'=>'23EA',':ribbon:'=>'1F380',':rice:'=>'1F35A',':rice_ball:'=>'1F359',':rice_cracker:'=>'1F358',':rice_scene:'=>'1F391',':ring:'=>'1F48D',':ro:'=>'1F1F7-1F1F4',':rocket:'=>'1F680',':roller_coaster:'=>'1F3A2',':rooster:'=>'1F413',':rose:'=>'1F339',':rotating_light:'=>'1F6A8',':round_pushpin:'=>'1F4CD',':rowboat:'=>'1F6A3',':rs:'=>'1F1F7-1F1F8',':ru:'=>'1F1F7-1F1FA',':rugby_football:'=>'1F3C9',':runner:'=>'1F3C3',':running_shirt_with_sash:'=>'1F3BD',':rw:'=>'1F1F7-1F1FC',':sa:'=>'1F1F8-1F1E6',':sagittarius:'=>'2650',':sailboat:'=>'26F5',':sake:'=>'1F376',':sandal:'=>'1F461',':santa:'=>'1F385',':satellite:'=>'1F4E1',':saxophone:'=>'1F3B7',':sb:'=>'1F1F8-1F1E7',':sc:'=>'1F1F8-1F1E8',':school:'=>'1F3EB',':school_satchel:'=>'1F392',':scissors:'=>'2702',':scorpius:'=>'264F',':scream:'=>'1F631',':scream_cat:'=>'1F640',':scroll:'=>'1F4DC',':sd:'=>'1F1F8-1F1E9',':se:'=>'1F1F8-1F1EA',':seat:'=>'1F4BA',':secret:'=>'3299',':see_no_evil:'=>'1F648',':seedling:'=>'1F331',':seven:'=>'0037-20E3',':sg:'=>'1F1F8-1F1EC',':sh:'=>'1F1F8-1F1ED',':shaved_ice:'=>'1F367',':sheep:'=>'1F411',':shell:'=>'1F41A',':ship:'=>'1F6A2',':shirt:'=>'1F455',':shower:'=>'1F6BF',':si:'=>'1F1F8-1F1EE',':signal_strength:'=>'1F4F6',':six:'=>'0036-20E3',':six_pointed_star:'=>'1F52F',':sk:'=>'1F1F8-1F1F0',':ski:'=>'1F3BF',':skull:'=>'1F480',':sl:'=>'1F1F8-1F1F1',':sleeping:'=>'1F634',':sleepy:'=>'1F62A',':slot_machine:'=>'1F3B0',':sm:'=>'1F1F8-1F1F2',':small_blue_diamond:'=>'1F539',':small_orange_diamond:'=>'1F538',':small_red_triangle:'=>'1F53A',':small_red_triangle_down:'=>'1F53B',':smile:'=>'1F604',':smile_cat:'=>'1F638',':smiley:'=>'1F603',':smiley_cat:'=>'1F63A',':smiling_imp:'=>'1F608',':smirk:'=>'1F60F',':smirk_cat:'=>'1F63C',':smoking:'=>'1F6AC',':sn:'=>'1F1F8-1F1F3',':snail:'=>'1F40C',':snake:'=>'1F40D',':snowboarder:'=>'1F3C2',':snowflake:'=>'2744',':snowman:'=>'26C4',':so:'=>'1F1F8-1F1F4',':sob:'=>'1F62D',':soccer:'=>'26BD',':soon:'=>'1F51C',':sos:'=>'1F198',':sound:'=>'1F509',':space_invader:'=>'1F47E',':spades:'=>'2660',':spaghetti:'=>'1F35D',':sparkle:'=>'2747',':sparkler:'=>'1F387',':sparkles:'=>'2728',':sparkling_heart:'=>'1F496',':speak_no_evil:'=>'1F64A',':speaker:'=>'1F508',':speech_balloon:'=>'1F4AC',':speedboat:'=>'1F6A4',':sr:'=>'1F1F8-1F1F7',':st:'=>'1F1F8-1F1F9',':star2:'=>'1F31F',':star:'=>'2B50',':stars:'=>'1F320',':station:'=>'1F689',':statue_of_liberty:'=>'1F5FD',':steam_locomotive:'=>'1F682',':stew:'=>'1F372',':straight_ruler:'=>'1F4CF',':strawberry:'=>'1F353',':stuck_out_tongue:'=>'1F61B',':stuck_out_tongue_closed_eyes:'=>'1F61D',':stuck_out_tongue_winking_eye:'=>'1F61C',':sun_with_face:'=>'1F31E',':sunflower:'=>'1F33B',':sunglasses:'=>'1F60E',':sunny:'=>'2600',':sunrise:'=>'1F305',':sunrise_over_mountains:'=>'1F304',':surfer:'=>'1F3C4',':sushi:'=>'1F363',':suspension_railway:'=>'1F69F',':sv:'=>'1F1F8-1F1FB',':sweat:'=>'1F613',':sweat_drops:'=>'1F4A6',':sweat_smile:'=>'1F605',':sweet_potato:'=>'1F360',':swimmer:'=>'1F3CA',':sy:'=>'1F1F8-1F1FE',':symbols:'=>'1F523',':syringe:'=>'1F489',':sz:'=>'1F1F8-1F1FF',':tada:'=>'1F389',':tanabata_tree:'=>'1F38B',':tangerine:'=>'1F34A',':taurus:'=>'2649',':taxi:'=>'1F695',':td:'=>'1F1F9-1F1E9',':tea:'=>'1F375',':telephone:'=>'260E',':telephone_receiver:'=>'1F4DE',':telescope:'=>'1F52D',':tennis:'=>'1F3BE',':tent:'=>'26FA',':tg:'=>'1F1F9-1F1EC',':th:'=>'1F1F9-1F1ED',':thought_balloon:'=>'1F4AD',':three:'=>'0033-20E3',':thumbsdown:'=>'1F44E',':thumbsup:'=>'1F44D',':ticket:'=>'1F3AB',':tiger2:'=>'1F405',':tiger:'=>'1F42F',':tired_face:'=>'1F62B',':tj:'=>'1F1F9-1F1EF',':tl:'=>'1F1F9-1F1F1',':tm:'=>'1F1F9-1F1F2',':tn:'=>'1F1F9-1F1F3',':to:'=>'1F1F9-1F1F4',':toilet:'=>'1F6BD',':tokyo_tower:'=>'1F5FC',':tomato:'=>'1F345',':tongue:'=>'1F445',':top:'=>'1F51D',':tophat:'=>'1F3A9',':tr:'=>'1F1F9-1F1F7',':tractor:'=>'1F69C',':traffic_light:'=>'1F6A5',':train2:'=>'1F686',':train:'=>'1F68B',':tram:'=>'1F68A',':triangular_flag_on_post:'=>'1F6A9',':triangular_ruler:'=>'1F4D0',':trident:'=>'1F531',':triumph:'=>'1F624',':trolleybus:'=>'1F68E',':trophy:'=>'1F3C6',':tropical_drink:'=>'1F379',':tropical_fish:'=>'1F420',':truck:'=>'1F69A',':trumpet:'=>'1F3BA',':tt:'=>'1F1F9-1F1F9',':tulip:'=>'1F337',':turtle:'=>'1F422',':tv:'=>'1F1F9-1F1FB',':tw:'=>'1F1F9-1F1FC',':twisted_rightwards_arrows:'=>'1F500',':two:'=>'0032-20E3',':two_hearts:'=>'1F495',':two_men_holding_hands:'=>'1F46C',':two_women_holding_hands:'=>'1F46D',':tz:'=>'1F1F9-1F1FF',':u5272:'=>'1F239',':u5408:'=>'1F234',':u55b6:'=>'1F23A',':u6307:'=>'1F22F',':u6708:'=>'1F237',':u6709:'=>'1F236',':u6e80:'=>'1F235',':u7121:'=>'1F21A',':u7533:'=>'1F238',':u7981:'=>'1F232',':u7a7a:'=>'1F233',':ua:'=>'1F1FA-1F1E6',':ug:'=>'1F1FA-1F1EC',':umbrella:'=>'2614',':unamused:'=>'1F612',':underage:'=>'1F51E',':unlock:'=>'1F513',':up:'=>'1F199',':us:'=>'1F1FA-1F1F8',':uy:'=>'1F1FA-1F1FE',':uz:'=>'1F1FA-1F1FF',':v:'=>'270C',':va:'=>'1F1FB-1F1E6',':vc:'=>'1F1FB-1F1E8',':ve:'=>'1F1FB-1F1EA',':vertical_traffic_light:'=>'1F6A6',':vhs:'=>'1F4FC',':vi:'=>'1F1FB-1F1EE',':vibration_mode:'=>'1F4F3',':video_camera:'=>'1F4F9',':video_game:'=>'1F3AE',':violin:'=>'1F3BB',':virgo:'=>'264D',':vn:'=>'1F1FB-1F1F3',':volcano:'=>'1F30B',':vs:'=>'1F19A',':vu:'=>'1F1FB-1F1FA',':walking:'=>'1F6B6',':waning_crescent_moon:'=>'1F318',':waning_gibbous_moon:'=>'1F316',':warning:'=>'26A0',':watch:'=>'231A',':water_buffalo:'=>'1F403',':watermelon:'=>'1F349',':wave:'=>'1F44B',':wavy_dash:'=>'3030',':waxing_crescent_moon:'=>'1F312',':waxing_gibbous_moon:'=>'1F314',':wc:'=>'1F6BE',':weary:'=>'1F629',':wedding:'=>'1F492',':wf:'=>'1F1FC-1F1EB',':whale2:'=>'1F40B',':whale:'=>'1F433',':wheelchair:'=>'267F',':white_check_mark:'=>'2705',':white_circle:'=>'26AA',':white_flower:'=>'1F4AE',':white_large_square:'=>'2B1C',':white_medium_small_square:'=>'25FD',':white_medium_square:'=>'25FB',':white_small_square:'=>'25AB',':white_square_button:'=>'1F533',':wind_chime:'=>'1F390',':wine_glass:'=>'1F377',':wink:'=>'1F609',':wolf:'=>'1F43A',':woman:'=>'1F469',':womans_clothes:'=>'1F45A',':womans_hat:'=>'1F452',':womens:'=>'1F6BA',':worried:'=>'1F61F',':wrench:'=>'1F527',':ws:'=>'1F1FC-1F1F8',':x:'=>'274C',':xk:'=>'1F1FD-1F1F0',':ye:'=>'1F1FE-1F1EA',':yellow_heart:'=>'1F49B',':yen:'=>'1F4B4',':yum:'=>'1F60B',':za:'=>'1F1FF-1F1E6',':zap:'=>'26A1',':zero:'=>'0030-20E3',':zm:'=>'1F1FF-1F1F2',':zw:'=>'1F1FF-1F1FC',':zzz:'=>'1F4A4','©'=>'00A9','®'=>'00AE','‼'=>'203C','⁉'=>'2049','ℹ'=>'2139','↔'=>'2194','↕'=>'2195','↖'=>'2196','↗'=>'2197','↘'=>'2198','↙'=>'2199','↩'=>'21A9','↪'=>'21AA','⌚'=>'231A','⌛'=>'231B','⏩'=>'23E9','⏪'=>'23EA','⏫'=>'23EB','⏬'=>'23EC','⏰'=>'23F0','⏳'=>'23F3','Ⓜ'=>'24C2','▪'=>'25AA','▫'=>'25AB','▶'=>'25B6','◀'=>'25C0','◻'=>'25FB','◼'=>'25FC','◽'=>'25FD','◾'=>'25FE','☀'=>'2600','☁'=>'2601','☎'=>'260E','☑'=>'2611','☔'=>'2614','☕'=>'2615','☝'=>'261D','☺'=>'263A','♈'=>'2648','♉'=>'2649','♊'=>'264A','♋'=>'264B','♌'=>'264C','♍'=>'264D','♎'=>'264E','♏'=>'264F','♐'=>'2650','♑'=>'2651','♒'=>'2652','♓'=>'2653','♠'=>'2660','♣'=>'2663','♥'=>'2665','♦'=>'2666','♨'=>'2668','♻'=>'267B','♿'=>'267F','⚓'=>'2693','⚠'=>'26A0','⚡'=>'26A1','⚪'=>'26AA','⚫'=>'26AB','⚽'=>'26BD','⚾'=>'26BE','⛄'=>'26C4','⛅'=>'26C5','⛎'=>'26CE','⛔'=>'26D4','⛪'=>'26EA','⛲'=>'26F2','⛳'=>'26F3','⛵'=>'26F5','⛺'=>'26FA','⛽'=>'26FD','✂'=>'2702','✅'=>'2705','✈'=>'2708','✉'=>'2709','✊'=>'270A','✋'=>'270B','✌'=>'270C','✏'=>'270F','✒'=>'2712','✔'=>'2714','✖'=>'2716','✨'=>'2728','✳'=>'2733','✴'=>'2734','❄'=>'2744','❇'=>'2747','❌'=>'274C','❎'=>'274E','❓'=>'2753','❔'=>'2754','❕'=>'2755','❗'=>'2757','❤'=>'2764','➕'=>'2795','➖'=>'2796','➗'=>'2797','➡'=>'27A1','➰'=>'27B0','➿'=>'27BF','⤴'=>'2934','⤵'=>'2935','⬅'=>'2B05','⬆'=>'2B06','⬇'=>'2B07','⬛'=>'2B1B','⬜'=>'2B1C','⭐'=>'2B50','⭕'=>'2B55','〰'=>'3030','〽'=>'303D','㊗'=>'3297','㊙'=>'3299','🀄'=>'1F004','🃏'=>'1F0CF','🅰'=>'1F170','🅱'=>'1F171','🅾'=>'1F17E','🅿'=>'1F17F','🆎'=>'1F18E','🆒'=>'1F192','🆓'=>'1F193','🆕'=>'1F195','🆗'=>'1F197','🆘'=>'1F198','🆙'=>'1F199','🆚'=>'1F19A','🇦🇨'=>'1F1E6-1F1E8','🇦🇩'=>'1F1E6-1F1E9','🇦🇪'=>'1F1E6-1F1EA','🇦🇫'=>'1F1E6-1F1EB','🇦🇬'=>'1F1E6-1F1EC','🇦🇮'=>'1F1E6-1F1EE','🇦🇱'=>'1F1E6-1F1F1','🇦🇲'=>'1F1E6-1F1F2','🇦🇴'=>'1F1E6-1F1F4','🇦🇷'=>'1F1E6-1F1F7','🇦🇹'=>'1F1E6-1F1F9','🇦🇺'=>'1F1E6-1F1FA','🇦🇼'=>'1F1E6-1F1FC','🇦🇿'=>'1F1E6-1F1FF','🇧🇦'=>'1F1E7-1F1E6','🇧🇧'=>'1F1E7-1F1E7','🇧🇩'=>'1F1E7-1F1E9','🇧🇪'=>'1F1E7-1F1EA','🇧🇫'=>'1F1E7-1F1EB','🇧🇬'=>'1F1E7-1F1EC','🇧🇭'=>'1F1E7-1F1ED','🇧🇮'=>'1F1E7-1F1EE','🇧🇯'=>'1F1E7-1F1EF','🇧🇲'=>'1F1E7-1F1F2','🇧🇳'=>'1F1E7-1F1F3','🇧🇴'=>'1F1E7-1F1F4','🇧🇷'=>'1F1E7-1F1F7','🇧🇸'=>'1F1E7-1F1F8','🇧🇹'=>'1F1E7-1F1F9','🇧🇼'=>'1F1E7-1F1FC','🇧🇾'=>'1F1E7-1F1FE','🇧🇿'=>'1F1E7-1F1FF','🇨🇦'=>'1F1E8-1F1E6','🇨🇩'=>'1F1E8-1F1E9','🇨🇫'=>'1F1E8-1F1EB','🇨🇬'=>'1F1E8-1F1EC','🇨🇭'=>'1F1E8-1F1ED','🇨🇮'=>'1F1E8-1F1EE','🇨🇱'=>'1F1E8-1F1F1','🇨🇲'=>'1F1E8-1F1F2','🇨🇳'=>'1F1E8-1F1F3','🇨🇴'=>'1F1E8-1F1F4','🇨🇷'=>'1F1E8-1F1F7','🇨🇺'=>'1F1E8-1F1FA','🇨🇻'=>'1F1E8-1F1FB','🇨🇾'=>'1F1E8-1F1FE','🇨🇿'=>'1F1E8-1F1FF','🇩🇪'=>'1F1E9-1F1EA','🇩🇯'=>'1F1E9-1F1EF','🇩🇰'=>'1F1E9-1F1F0','🇩🇲'=>'1F1E9-1F1F2','🇩🇴'=>'1F1E9-1F1F4','🇩🇿'=>'1F1E9-1F1FF','🇪🇨'=>'1F1EA-1F1E8','🇪🇪'=>'1F1EA-1F1EA','🇪🇬'=>'1F1EA-1F1EC','🇪🇭'=>'1F1EA-1F1ED','🇪🇷'=>'1F1EA-1F1F7','🇪🇸'=>'1F1EA-1F1F8','🇪🇹'=>'1F1EA-1F1F9','🇫🇮'=>'1F1EB-1F1EE','🇫🇯'=>'1F1EB-1F1EF','🇫🇰'=>'1F1EB-1F1F0','🇫🇲'=>'1F1EB-1F1F2','🇫🇴'=>'1F1EB-1F1F4','🇫🇷'=>'1F1EB-1F1F7','🇬🇦'=>'1F1EC-1F1E6','🇬🇧'=>'1F1EC-1F1E7','🇬🇩'=>'1F1EC-1F1E9','🇬🇪'=>'1F1EC-1F1EA','🇬🇭'=>'1F1EC-1F1ED','🇬🇮'=>'1F1EC-1F1EE','🇬🇱'=>'1F1EC-1F1F1','🇬🇲'=>'1F1EC-1F1F2','🇬🇳'=>'1F1EC-1F1F3','🇬🇶'=>'1F1EC-1F1F6','🇬🇷'=>'1F1EC-1F1F7','🇬🇹'=>'1F1EC-1F1F9','🇬🇺'=>'1F1EC-1F1FA','🇬🇼'=>'1F1EC-1F1FC','🇬🇾'=>'1F1EC-1F1FE','🇭🇰'=>'1F1ED-1F1F0','🇭🇳'=>'1F1ED-1F1F3','🇭🇷'=>'1F1ED-1F1F7','🇭🇹'=>'1F1ED-1F1F9','🇭🇺'=>'1F1ED-1F1FA','🇮🇩'=>'1F1EE-1F1E9','🇮🇪'=>'1F1EE-1F1EA','🇮🇱'=>'1F1EE-1F1F1','🇮🇳'=>'1F1EE-1F1F3','🇮🇶'=>'1F1EE-1F1F6','🇮🇷'=>'1F1EE-1F1F7','🇮🇸'=>'1F1EE-1F1F8','🇮🇹'=>'1F1EE-1F1F9','🇯🇪'=>'1F1EF-1F1EA','🇯🇲'=>'1F1EF-1F1F2','🇯🇴'=>'1F1EF-1F1F4','🇯🇵'=>'1F1EF-1F1F5','🇰🇪'=>'1F1F0-1F1EA','🇰🇬'=>'1F1F0-1F1EC','🇰🇭'=>'1F1F0-1F1ED','🇰🇮'=>'1F1F0-1F1EE','🇰🇲'=>'1F1F0-1F1F2','🇰🇳'=>'1F1F0-1F1F3','🇰🇵'=>'1F1F0-1F1F5','🇰🇷'=>'1F1F0-1F1F7','🇰🇼'=>'1F1F0-1F1FC','🇰🇾'=>'1F1F0-1F1FE','🇰🇿'=>'1F1F0-1F1FF','🇱🇦'=>'1F1F1-1F1E6','🇱🇧'=>'1F1F1-1F1E7','🇱🇨'=>'1F1F1-1F1E8','🇱🇮'=>'1F1F1-1F1EE','🇱🇰'=>'1F1F1-1F1F0','🇱🇷'=>'1F1F1-1F1F7','🇱🇸'=>'1F1F1-1F1F8','🇱🇹'=>'1F1F1-1F1F9','🇱🇺'=>'1F1F1-1F1FA','🇱🇻'=>'1F1F1-1F1FB','🇱🇾'=>'1F1F1-1F1FE','🇲🇦'=>'1F1F2-1F1E6','🇲🇨'=>'1F1F2-1F1E8','🇲🇩'=>'1F1F2-1F1E9','🇲🇪'=>'1F1F2-1F1EA','🇲🇬'=>'1F1F2-1F1EC','🇲🇭'=>'1F1F2-1F1ED','🇲🇰'=>'1F1F2-1F1F0','🇲🇱'=>'1F1F2-1F1F1','🇲🇲'=>'1F1F2-1F1F2','🇲🇳'=>'1F1F2-1F1F3','🇲🇴'=>'1F1F2-1F1F4','🇲🇷'=>'1F1F2-1F1F7','🇲🇸'=>'1F1F2-1F1F8','🇲🇹'=>'1F1F2-1F1F9','🇲🇺'=>'1F1F2-1F1FA','🇲🇻'=>'1F1F2-1F1FB','🇲🇼'=>'1F1F2-1F1FC','🇲🇽'=>'1F1F2-1F1FD','🇲🇾'=>'1F1F2-1F1FE','🇲🇿'=>'1F1F2-1F1FF','🇳🇦'=>'1F1F3-1F1E6','🇳🇨'=>'1F1F3-1F1E8','🇳🇪'=>'1F1F3-1F1EA','🇳🇬'=>'1F1F3-1F1EC','🇳🇮'=>'1F1F3-1F1EE','🇳🇱'=>'1F1F3-1F1F1','🇳🇴'=>'1F1F3-1F1F4','🇳🇵'=>'1F1F3-1F1F5','🇳🇷'=>'1F1F3-1F1F7','🇳🇺'=>'1F1F3-1F1FA','🇳🇿'=>'1F1F3-1F1FF','🇴🇲'=>'1F1F4-1F1F2','🇵🇦'=>'1F1F5-1F1E6','🇵🇪'=>'1F1F5-1F1EA','🇵🇫'=>'1F1F5-1F1EB','🇵🇬'=>'1F1F5-1F1EC','🇵🇭'=>'1F1F5-1F1ED','🇵🇰'=>'1F1F5-1F1F0','🇵🇱'=>'1F1F5-1F1F1','🇵🇷'=>'1F1F5-1F1F7','🇵🇸'=>'1F1F5-1F1F8','🇵🇹'=>'1F1F5-1F1F9','🇵🇼'=>'1F1F5-1F1FC','🇵🇾'=>'1F1F5-1F1FE','🇶🇦'=>'1F1F6-1F1E6','🇷🇴'=>'1F1F7-1F1F4','🇷🇸'=>'1F1F7-1F1F8','🇷🇺'=>'1F1F7-1F1FA','🇷🇼'=>'1F1F7-1F1FC','🇸🇦'=>'1F1F8-1F1E6','🇸🇧'=>'1F1F8-1F1E7','🇸🇨'=>'1F1F8-1F1E8','🇸🇩'=>'1F1F8-1F1E9','🇸🇪'=>'1F1F8-1F1EA','🇸🇬'=>'1F1F8-1F1EC','🇸🇭'=>'1F1F8-1F1ED','🇸🇮'=>'1F1F8-1F1EE','🇸🇰'=>'1F1F8-1F1F0','🇸🇱'=>'1F1F8-1F1F1','🇸🇲'=>'1F1F8-1F1F2','🇸🇳'=>'1F1F8-1F1F3','🇸🇴'=>'1F1F8-1F1F4','🇸🇷'=>'1F1F8-1F1F7','🇸🇹'=>'1F1F8-1F1F9','🇸🇻'=>'1F1F8-1F1FB','🇸🇾'=>'1F1F8-1F1FE','🇸🇿'=>'1F1F8-1F1FF','🇹🇩'=>'1F1F9-1F1E9','🇹🇬'=>'1F1F9-1F1EC','🇹🇭'=>'1F1F9-1F1ED','🇹🇯'=>'1F1F9-1F1EF','🇹🇱'=>'1F1F9-1F1F1','🇹🇲'=>'1F1F9-1F1F2','🇹🇳'=>'1F1F9-1F1F3','🇹🇴'=>'1F1F9-1F1F4','🇹🇷'=>'1F1F9-1F1F7','🇹🇹'=>'1F1F9-1F1F9','🇹🇻'=>'1F1F9-1F1FB','🇹🇼'=>'1F1F9-1F1FC','🇹🇿'=>'1F1F9-1F1FF','🇺🇦'=>'1F1FA-1F1E6','🇺🇬'=>'1F1FA-1F1EC','🇺🇸'=>'1F1FA-1F1F8','🇺🇾'=>'1F1FA-1F1FE','🇺🇿'=>'1F1FA-1F1FF','🇻🇦'=>'1F1FB-1F1E6','🇻🇨'=>'1F1FB-1F1E8','🇻🇪'=>'1F1FB-1F1EA','🇻🇮'=>'1F1FB-1F1EE','🇻🇳'=>'1F1FB-1F1F3','🇻🇺'=>'1F1FB-1F1FA','🇼🇫'=>'1F1FC-1F1EB','🇼🇸'=>'1F1FC-1F1F8','🇽🇰'=>'1F1FD-1F1F0','🇾🇪'=>'1F1FE-1F1EA','🇿🇦'=>'1F1FF-1F1E6','🇿🇲'=>'1F1FF-1F1F2','🇿🇼'=>'1F1FF-1F1FC','🈁'=>'1F201','🈚'=>'1F21A','🈯'=>'1F22F','🈲'=>'1F232','🈳'=>'1F233','🈴'=>'1F234','🈵'=>'1F235','🈶'=>'1F236','🈷'=>'1F237','🈸'=>'1F238','🈹'=>'1F239','🈺'=>'1F23A','🉐'=>'1F250','🉑'=>'1F251','🌀'=>'1F300','🌁'=>'1F301','🌂'=>'1F302','🌃'=>'1F303','🌄'=>'1F304','🌅'=>'1F305','🌆'=>'1F306','🌇'=>'1F307','🌈'=>'1F308','🌉'=>'1F309','🌊'=>'1F30A','🌋'=>'1F30B','🌌'=>'1F30C','🌍'=>'1F30D','🌎'=>'1F30E','🌏'=>'1F30F','🌐'=>'1F310','🌑'=>'1F311','🌒'=>'1F312','🌓'=>'1F313','🌔'=>'1F314','🌕'=>'1F315','🌖'=>'1F316','🌗'=>'1F317','🌘'=>'1F318','🌙'=>'1F319','🌚'=>'1F31A','🌛'=>'1F31B','🌜'=>'1F31C','🌝'=>'1F31D','🌞'=>'1F31E','🌟'=>'1F31F','🌠'=>'1F320','🌰'=>'1F330','🌱'=>'1F331','🌲'=>'1F332','🌳'=>'1F333','🌴'=>'1F334','🌵'=>'1F335','🌷'=>'1F337','🌸'=>'1F338','🌹'=>'1F339','🌺'=>'1F33A','🌻'=>'1F33B','🌼'=>'1F33C','🌽'=>'1F33D','🌾'=>'1F33E','🌿'=>'1F33F','🍀'=>'1F340','🍁'=>'1F341','🍂'=>'1F342','🍃'=>'1F343','🍄'=>'1F344','🍅'=>'1F345','🍆'=>'1F346','🍇'=>'1F347','🍈'=>'1F348','🍉'=>'1F349','🍊'=>'1F34A','🍋'=>'1F34B','🍌'=>'1F34C','🍍'=>'1F34D','🍎'=>'1F34E','🍏'=>'1F34F','🍐'=>'1F350','🍑'=>'1F351','🍒'=>'1F352','🍓'=>'1F353','🍔'=>'1F354','🍕'=>'1F355','🍖'=>'1F356','🍗'=>'1F357','🍘'=>'1F358','🍙'=>'1F359','🍚'=>'1F35A','🍛'=>'1F35B','🍜'=>'1F35C','🍝'=>'1F35D','🍞'=>'1F35E','🍟'=>'1F35F','🍠'=>'1F360','🍡'=>'1F361','🍢'=>'1F362','🍣'=>'1F363','🍤'=>'1F364','🍥'=>'1F365','🍦'=>'1F366','🍧'=>'1F367','🍨'=>'1F368','🍩'=>'1F369','🍪'=>'1F36A','🍫'=>'1F36B','🍬'=>'1F36C','🍭'=>'1F36D','🍮'=>'1F36E','🍯'=>'1F36F','🍰'=>'1F370','🍱'=>'1F371','🍲'=>'1F372','🍳'=>'1F373','🍴'=>'1F374','🍵'=>'1F375','🍶'=>'1F376','🍷'=>'1F377','🍸'=>'1F378','🍹'=>'1F379','🍺'=>'1F37A','🍻'=>'1F37B','🍼'=>'1F37C','🎀'=>'1F380','🎁'=>'1F381','🎂'=>'1F382','🎃'=>'1F383','🎄'=>'1F384','🎅'=>'1F385','🎆'=>'1F386','🎇'=>'1F387','🎈'=>'1F388','🎉'=>'1F389','🎊'=>'1F38A','🎋'=>'1F38B','🎌'=>'1F38C','🎍'=>'1F38D','🎎'=>'1F38E','🎏'=>'1F38F','🎐'=>'1F390','🎑'=>'1F391','🎒'=>'1F392','🎓'=>'1F393','🎠'=>'1F3A0','🎡'=>'1F3A1','🎢'=>'1F3A2','🎣'=>'1F3A3','🎤'=>'1F3A4','🎥'=>'1F3A5','🎦'=>'1F3A6','🎧'=>'1F3A7','🎨'=>'1F3A8','🎩'=>'1F3A9','🎪'=>'1F3AA','🎫'=>'1F3AB','🎬'=>'1F3AC','🎭'=>'1F3AD','🎮'=>'1F3AE','🎯'=>'1F3AF','🎰'=>'1F3B0','🎱'=>'1F3B1','🎲'=>'1F3B2','🎳'=>'1F3B3','🎴'=>'1F3B4','🎵'=>'1F3B5','🎶'=>'1F3B6','🎷'=>'1F3B7','🎸'=>'1F3B8','🎹'=>'1F3B9','🎺'=>'1F3BA','🎻'=>'1F3BB','🎼'=>'1F3BC','🎽'=>'1F3BD','🎾'=>'1F3BE','🎿'=>'1F3BF','🏀'=>'1F3C0','🏁'=>'1F3C1','🏂'=>'1F3C2','🏃'=>'1F3C3','🏄'=>'1F3C4','🏆'=>'1F3C6','🏇'=>'1F3C7','🏈'=>'1F3C8','🏉'=>'1F3C9','🏊'=>'1F3CA','🏠'=>'1F3E0','🏡'=>'1F3E1','🏢'=>'1F3E2','🏣'=>'1F3E3','🏤'=>'1F3E4','🏥'=>'1F3E5','🏦'=>'1F3E6','🏧'=>'1F3E7','🏨'=>'1F3E8','🏩'=>'1F3E9','🏪'=>'1F3EA','🏫'=>'1F3EB','🏬'=>'1F3EC','🏭'=>'1F3ED','🏮'=>'1F3EE','🏯'=>'1F3EF','🏰'=>'1F3F0','🐀'=>'1F400','🐁'=>'1F401','🐂'=>'1F402','🐃'=>'1F403','🐄'=>'1F404','🐅'=>'1F405','🐆'=>'1F406','🐇'=>'1F407','🐈'=>'1F408','🐉'=>'1F409','🐊'=>'1F40A','🐋'=>'1F40B','🐌'=>'1F40C','🐍'=>'1F40D','🐎'=>'1F40E','🐏'=>'1F40F','🐐'=>'1F410','🐑'=>'1F411','🐒'=>'1F412','🐓'=>'1F413','🐔'=>'1F414','🐕'=>'1F415','🐖'=>'1F416','🐗'=>'1F417','🐘'=>'1F418','🐙'=>'1F419','🐚'=>'1F41A','🐛'=>'1F41B','🐜'=>'1F41C','🐝'=>'1F41D','🐞'=>'1F41E','🐟'=>'1F41F','🐠'=>'1F420','🐡'=>'1F421','🐢'=>'1F422','🐣'=>'1F423','🐤'=>'1F424','🐥'=>'1F425','🐦'=>'1F426','🐧'=>'1F427','🐨'=>'1F428','🐩'=>'1F429','🐪'=>'1F42A','🐫'=>'1F42B','🐬'=>'1F42C','🐭'=>'1F42D','🐮'=>'1F42E','🐯'=>'1F42F','🐰'=>'1F430','🐱'=>'1F431','🐲'=>'1F432','🐳'=>'1F433','🐴'=>'1F434','🐵'=>'1F435','🐶'=>'1F436','🐷'=>'1F437','🐸'=>'1F438','🐹'=>'1F439','🐺'=>'1F43A','🐻'=>'1F43B','🐼'=>'1F43C','🐽'=>'1F43D','🐾'=>'1F43E','👀'=>'1F440','👂'=>'1F442','👃'=>'1F443','👄'=>'1F444','👅'=>'1F445','👆'=>'1F446','👇'=>'1F447','👈'=>'1F448','👉'=>'1F449','👊'=>'1F44A','👋'=>'1F44B','👌'=>'1F44C','👍'=>'1F44D','👎'=>'1F44E','👏'=>'1F44F','👐'=>'1F450','👑'=>'1F451','👒'=>'1F452','👓'=>'1F453','👔'=>'1F454','👕'=>'1F455','👖'=>'1F456','👗'=>'1F457','👘'=>'1F458','👙'=>'1F459','👚'=>'1F45A','👛'=>'1F45B','👜'=>'1F45C','👝'=>'1F45D','👞'=>'1F45E','👟'=>'1F45F','👠'=>'1F460','👡'=>'1F461','👢'=>'1F462','👣'=>'1F463','👤'=>'1F464','👥'=>'1F465','👦'=>'1F466','👧'=>'1F467','👨'=>'1F468','👩'=>'1F469','👪'=>'1F46A','👫'=>'1F46B','👬'=>'1F46C','👭'=>'1F46D','👮'=>'1F46E','👯'=>'1F46F','👰'=>'1F470','👱'=>'1F471','👲'=>'1F472','👳'=>'1F473','👴'=>'1F474','👵'=>'1F475','👶'=>'1F476','👷'=>'1F477','👸'=>'1F478','👹'=>'1F479','👺'=>'1F47A','👻'=>'1F47B','👼'=>'1F47C','👽'=>'1F47D','👾'=>'1F47E','👿'=>'1F47F','💀'=>'1F480','💁'=>'1F481','💂'=>'1F482','💃'=>'1F483','💄'=>'1F484','💅'=>'1F485','💆'=>'1F486','💇'=>'1F487','💈'=>'1F488','💉'=>'1F489','💊'=>'1F48A','💋'=>'1F48B','💌'=>'1F48C','💍'=>'1F48D','💎'=>'1F48E','💏'=>'1F48F','💐'=>'1F490','💑'=>'1F491','💒'=>'1F492','💓'=>'1F493','💔'=>'1F494','💕'=>'1F495','💖'=>'1F496','💗'=>'1F497','💘'=>'1F498','💙'=>'1F499','💚'=>'1F49A','💛'=>'1F49B','💜'=>'1F49C','💝'=>'1F49D','💞'=>'1F49E','💟'=>'1F49F','💠'=>'1F4A0','💡'=>'1F4A1','💢'=>'1F4A2','💣'=>'1F4A3','💤'=>'1F4A4','💥'=>'1F4A5','💦'=>'1F4A6','💧'=>'1F4A7','💨'=>'1F4A8','💩'=>'1F4A9','💪'=>'1F4AA','💫'=>'1F4AB','💬'=>'1F4AC','💭'=>'1F4AD','💮'=>'1F4AE','💯'=>'1F4AF','💰'=>'1F4B0','💱'=>'1F4B1','💲'=>'1F4B2','💳'=>'1F4B3','💴'=>'1F4B4','💵'=>'1F4B5','💶'=>'1F4B6','💷'=>'1F4B7','💸'=>'1F4B8','💹'=>'1F4B9','💺'=>'1F4BA','💻'=>'1F4BB','💼'=>'1F4BC','💽'=>'1F4BD','💾'=>'1F4BE','📀'=>'1F4C0','📁'=>'1F4C1','📂'=>'1F4C2','📃'=>'1F4C3','📄'=>'1F4C4','📅'=>'1F4C5','📆'=>'1F4C6','📇'=>'1F4C7','📈'=>'1F4C8','📉'=>'1F4C9','📊'=>'1F4CA','📋'=>'1F4CB','📌'=>'1F4CC','📍'=>'1F4CD','📎'=>'1F4CE','📏'=>'1F4CF','📐'=>'1F4D0','📑'=>'1F4D1','📒'=>'1F4D2','📓'=>'1F4D3','📔'=>'1F4D4','📕'=>'1F4D5','📖'=>'1F4D6','📗'=>'1F4D7','📘'=>'1F4D8','📙'=>'1F4D9','📚'=>'1F4DA','📛'=>'1F4DB','📜'=>'1F4DC','📝'=>'1F4DD','📞'=>'1F4DE','📟'=>'1F4DF','📠'=>'1F4E0','📡'=>'1F4E1','📢'=>'1F4E2','📣'=>'1F4E3','📤'=>'1F4E4','📥'=>'1F4E5','📦'=>'1F4E6','📧'=>'1F4E7','📨'=>'1F4E8','📩'=>'1F4E9','📪'=>'1F4EA','📫'=>'1F4EB','📬'=>'1F4EC','📭'=>'1F4ED','📮'=>'1F4EE','📯'=>'1F4EF','📰'=>'1F4F0','📱'=>'1F4F1','📲'=>'1F4F2','📳'=>'1F4F3','📴'=>'1F4F4','📵'=>'1F4F5','📶'=>'1F4F6','📷'=>'1F4F7','📹'=>'1F4F9','📻'=>'1F4FB','📼'=>'1F4FC','🔀'=>'1F500','🔁'=>'1F501','🔂'=>'1F502','🔃'=>'1F503','🔄'=>'1F504','🔅'=>'1F505','🔆'=>'1F506','🔇'=>'1F507','🔈'=>'1F508','🔉'=>'1F509','🔊'=>'1F50A','🔋'=>'1F50B','🔌'=>'1F50C','🔍'=>'1F50D','🔎'=>'1F50E','🔏'=>'1F50F','🔐'=>'1F510','🔑'=>'1F511','🔒'=>'1F512','🔓'=>'1F513','🔔'=>'1F514','🔕'=>'1F515','🔖'=>'1F516','🔗'=>'1F517','🔘'=>'1F518','🔙'=>'1F519','🔚'=>'1F51A','🔛'=>'1F51B','🔜'=>'1F51C','🔝'=>'1F51D','🔞'=>'1F51E','🔟'=>'1F51F','🔠'=>'1F520','🔡'=>'1F521','🔢'=>'1F522','🔣'=>'1F523','🔤'=>'1F524','🔥'=>'1F525','🔦'=>'1F526','🔧'=>'1F527','🔨'=>'1F528','🔩'=>'1F529','🔪'=>'1F52A','🔫'=>'1F52B','🔬'=>'1F52C','🔭'=>'1F52D','🔮'=>'1F52E','🔯'=>'1F52F','🔰'=>'1F530','🔱'=>'1F531','🔲'=>'1F532','🔳'=>'1F533','🔴'=>'1F534','🔵'=>'1F535','🔶'=>'1F536','🔷'=>'1F537','🔸'=>'1F538','🔹'=>'1F539','🔺'=>'1F53A','🔻'=>'1F53B','🔼'=>'1F53C','🔽'=>'1F53D','🕐'=>'1F550','🕑'=>'1F551','🕒'=>'1F552','🕓'=>'1F553','🕔'=>'1F554','🕕'=>'1F555','🕖'=>'1F556','🕗'=>'1F557','🕘'=>'1F558','🕙'=>'1F559','🕚'=>'1F55A','🕛'=>'1F55B','🕜'=>'1F55C','🕝'=>'1F55D','🕞'=>'1F55E','🕟'=>'1F55F','🕠'=>'1F560','🕡'=>'1F561','🕢'=>'1F562','🕣'=>'1F563','🕤'=>'1F564','🕥'=>'1F565','🕦'=>'1F566','🕧'=>'1F567','🗻'=>'1F5FB','🗼'=>'1F5FC','🗽'=>'1F5FD','🗾'=>'1F5FE','🗿'=>'1F5FF','😀'=>'1F600','😁'=>'1F601','😂'=>'1F602','😃'=>'1F603','😄'=>'1F604','😅'=>'1F605','😆'=>'1F606','😇'=>'1F607','😈'=>'1F608','😉'=>'1F609','😊'=>'1F60A','😋'=>'1F60B','😌'=>'1F60C','😍'=>'1F60D','😎'=>'1F60E','😏'=>'1F60F','😐'=>'1F610','😑'=>'1F611','😒'=>'1F612','😓'=>'1F613','😔'=>'1F614','😕'=>'1F615','😖'=>'1F616','😗'=>'1F617','😘'=>'1F618','😙'=>'1F619','😚'=>'1F61A','😛'=>'1F61B','😜'=>'1F61C','😝'=>'1F61D','😞'=>'1F61E','😟'=>'1F61F','😠'=>'1F620','😡'=>'1F621','😢'=>'1F622','😣'=>'1F623','😤'=>'1F624','😥'=>'1F625','😦'=>'1F626','😧'=>'1F627','😨'=>'1F628','😩'=>'1F629','😪'=>'1F62A','😫'=>'1F62B','😬'=>'1F62C','😭'=>'1F62D','😮'=>'1F62E','😯'=>'1F62F','😰'=>'1F630','😱'=>'1F631','😲'=>'1F632','😳'=>'1F633','😴'=>'1F634','😵'=>'1F635','😶'=>'1F636','😷'=>'1F637','😸'=>'1F638','😹'=>'1F639','😺'=>'1F63A','😻'=>'1F63B','😼'=>'1F63C','😽'=>'1F63D','😾'=>'1F63E','😿'=>'1F63F','🙀'=>'1F640','🙅'=>'1F645','🙆'=>'1F646','🙇'=>'1F647','🙈'=>'1F648','🙉'=>'1F649','🙊'=>'1F64A','🙋'=>'1F64B','🙌'=>'1F64C','🙍'=>'1F64D','🙎'=>'1F64E','🙏'=>'1F64F','🚀'=>'1F680','🚁'=>'1F681','🚂'=>'1F682','🚃'=>'1F683','🚄'=>'1F684','🚅'=>'1F685','🚆'=>'1F686','🚇'=>'1F687','🚈'=>'1F688','🚉'=>'1F689','🚊'=>'1F68A','🚋'=>'1F68B','🚌'=>'1F68C','🚍'=>'1F68D','🚎'=>'1F68E','🚏'=>'1F68F','🚐'=>'1F690','🚑'=>'1F691','🚒'=>'1F692','🚓'=>'1F693','🚔'=>'1F694','🚕'=>'1F695','🚖'=>'1F696','🚗'=>'1F697','🚘'=>'1F698','🚙'=>'1F699','🚚'=>'1F69A','🚛'=>'1F69B','🚜'=>'1F69C','🚝'=>'1F69D','🚞'=>'1F69E','🚟'=>'1F69F','🚠'=>'1F6A0','🚡'=>'1F6A1','🚢'=>'1F6A2','🚣'=>'1F6A3','🚤'=>'1F6A4','🚥'=>'1F6A5','🚦'=>'1F6A6','🚧'=>'1F6A7','🚨'=>'1F6A8','🚩'=>'1F6A9','🚪'=>'1F6AA','🚫'=>'1F6AB','🚬'=>'1F6AC','🚭'=>'1F6AD','🚮'=>'1F6AE','🚯'=>'1F6AF','🚰'=>'1F6B0','🚱'=>'1F6B1','🚲'=>'1F6B2','🚳'=>'1F6B3','🚴'=>'1F6B4','🚵'=>'1F6B5','🚶'=>'1F6B6','🚷'=>'1F6B7','🚸'=>'1F6B8','🚹'=>'1F6B9','🚺'=>'1F6BA','🚻'=>'1F6BB','🚼'=>'1F6BC','🚽'=>'1F6BD','🚾'=>'1F6BE','🚿'=>'1F6BF','🛀'=>'1F6C0','🛁'=>'1F6C1','🛂'=>'1F6C2','🛃'=>'1F6C3','🛄'=>'1F6C4','🛅'=>'1F6C5'];

	public function parse($text, array $matches)
	{
		foreach ($matches as $m)
		{
			if ($m[0][0][0] === ':')
			{
				$key    = $m[0][0] . ':';
				$tagLen = \strlen($key);
			}
			else
			{
				$key    = \str_replace("\xEF\xB8\x8F", '', $m[0][0]);
				$tagLen = \strlen($m[0][0]);
			}

			if (!isset(self::$map[$key]))
				continue;

			$this->parser->addSelfClosingTag($this->config['tagName'], $m[0][1], $tagLen)
			             ->setAttribute($this->config['attrName'], self::$map[$key]);
		}
	}
}