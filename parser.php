<?php
error_reporting(true);
global $wpdb;
$results = $wpdb->get_results( 'SELECT * FROM wp_options WHERE option_id = 1', OBJECT );
include("/wp-includes/wp-db.php");
	echo "I wanna parse!<br/>";
	$json = '
	path3974: { path: "m 43.331012,211.51577 c -0.617729,-2.07112 -1.893223,-6.3175 -2.834431,-9.43642 -0.941209,-3.11892 -1.714199,-5.88931 -1.717755,-6.15643 -0.007,-0.52887 18.00424,0.11226 20.284257,0.72203 1.105729,0.29572 1.810147,1.36546 3.350772,5.08857 1.072893,2.59277 1.795823,4.86902 1.606512,5.05833 -0.189312,0.18931 -4.669155,2.17691 -9.955208,4.41689 l -9.611005,4.07268 -1.123142,-3.76565 z"},
	path3976: { path: "m 47.453242,224.61655 c -0.995512,-3.3506 -1.633472,-6.16215 -1.41769,-6.24789 0.215783,-0.0857 4.730463,-2.04807 10.032623,-4.36073 5.30216,-2.31266 9.806388,-4.0288 10.009397,-3.81364 0.942631,0.99905 5.04897,11.63965 4.6353,12.01129 -0.428335,0.3848 -20.719475,8.51638 -21.228059,8.50703 -0.121852,-0.002 -1.036059,-2.74547 -2.031571,-6.09606 z" },
	path3978: { path: "m 52.323267,240.70704 -2.013132,-6.46502 10.536578,-4.31451 c 5.795118,-2.37298 10.790848,-4.31239 11.101621,-4.30979 0.310774,0.003 1.618305,2.6646 2.905627,5.91556 l 2.340584,5.91084 -11.07274,4.71711 c -6.090007,2.59441 -11.23309,4.7832 -11.429073,4.86398 -0.195983,0.0808 -1.262242,-2.7624 -2.369465,-6.31817 z"},
	path3980: { path: "m 57.581812,257.29887 c -1.03885,-3.46645 -1.676811,-6.50362 -1.41769,-6.74927 0.259121,-0.24564 5.319628,-2.61721 11.245571,-5.27014 l 10.774442,-4.82352 1.810592,3.77828 c 0.995825,2.07805 2.308769,4.96001 2.917654,6.40435 l 1.107063,2.62607 -12.098403,5.17122 c -6.654122,2.84418 -12.177605,5.16997 -12.274407,5.16844 -0.0968,-0.002 -1.025972,-2.83897 -2.064822,-6.30543 z"},
	path3982: { path: "m 62.59525,274.31701 c -1.045227,-3.8372 -1.638252,-7.00915 -1.356636,-7.25631 0.586777,-0.515 23.356641,-10.25853 23.973374,-10.25853 0.716483,0 5.903399,12.53393 5.377858,12.99533 -0.39556,0.34728 -12.533277,5.6239 -24.375358,10.59668 l -1.762282,0.74003 -1.856956,-6.8172 z"},
	path3984: { path: "m 68.874414,296.11957 c -0.324103,-1.19566 -1.219388,-4.33516 -1.989522,-6.97667 -0.770134,-2.64152 -1.349885,-4.83129 -1.288335,-4.86617 0.964469,-0.54651 25.955839,-11.02935 26.294275,-11.02935 0.509335,0 6.146457,12.38581 5.788499,12.71841 -0.181467,0.16861 -25.555854,11.28216 -27.54141,12.06267 -0.400406,0.15739 -0.913549,-0.61786 -1.263507,-1.90889 z"},
	path3986: { path: "m 72.381515,305.74676 c -0.692942,-2.3983 -1.201934,-4.39733 -1.131093,-4.44229 1.090168,-0.69181 27.695687,-11.73607 27.862741,-11.56615 0.594515,0.60473 6.572877,14.88853 6.332197,15.12921 -0.20555,0.20555 -30.027294,5.14969 -31.517353,5.22525 -0.157629,0.008 -0.85355,-1.94772 -1.546492,-4.34602 z"},
	path3988: { path: "m 81.763563,212.14495 c -0.647319,-1.48149 -2.419259,-5.48343 -3.937645,-8.8932 -1.518385,-3.40977 -2.761014,-6.2168 -2.761399,-6.23784 -0.003,-0.16651 27.294181,0.702 27.449391,0.87336 0.59241,0.65401 3.17341,6.2473 3.17341,6.8771 0,0.62371 -20.912635,10.07419 -22.292835,10.07419 -0.249688,0 -0.983603,-1.21213 -1.630922,-2.69361 z"},
	path3990: { path: "m 87.271037,225.21335 c -1.439849,-3.59805 -2.524224,-6.63559 -2.40972,-6.7501 0.39298,-0.39298 22.131163,-9.86253 22.640303,-9.86253 0.46498,0 6.12476,11.48995 6.12476,12.4339 0,0.22416 -1.5949,1.07149 -3.54422,1.88296 -1.94933,0.81148 -7.29025,3.13192 -11.868721,5.15655 l -8.324493,3.68113 -2.617909,-6.54191 z"},
	path3992: { path: "m 97.323713,247.83509 c -0.198879,-0.52621 -1.43744,-3.63618 -2.752357,-6.91104 -1.314917,-3.27486 -2.299708,-6.04728 -2.188423,-6.16093 0.111285,-0.11365 5.255566,-2.46348 11.431737,-5.22185 l 11.2294,-5.01523 2.09955,4.37124 c 1.15475,2.40418 2.59255,5.54637 3.1951,6.98265 l 1.09554,2.6114 -11.87447,5.15026 c -10.254955,4.44783 -11.923796,5.01977 -12.236077,4.1935 z"},
	path3994: { path: "m 127.18193,243.39514 c -5.70346,-11.88094 -5.79561,-12.11138 -4.84306,-12.11138 0.40995,0 5.86845,1.02073 12.13,2.2683 6.26156,1.24757 11.5193,2.26831 11.68389,2.26831 0.69047,0 6.61179,8.15351 6.20089,8.53846 -0.34086,0.31934 -12.3031,5.3247 -19.8729,8.31544 -0.46173,0.18242 -2.31338,-3.06013 -5.29882,-9.27913 z"},
	path3996: { path: "m 102.15073,259.38807 c -1.45906,-3.44954 -2.727525,-6.59703 -2.818811,-6.99442 -0.15783,-0.68708 22.597371,-11.29478 23.116171,-10.77598 0.35421,0.35421 6.41198,13.18259 6.285,13.30957 -0.0624,0.0624 -5.47204,2.50276 -12.02147,5.42307 l -11.90806,5.30966 -2.65283,-6.2719 z"},
	path3998: { path: "m 114.7876,289.51119 c -4.34765,-11.15591 -5.1807,-13.60403 -4.76734,-14.01013 0.73924,-0.72628 23.45805,-10.3775 23.74737,-10.08817 0.30943,0.30942 6.44252,13.76183 6.31733,13.85652 -0.0493,0.0373 -5.6529,2.63506 -12.45255,5.77291 -11.99664,5.5361 -12.37728,5.66853 -12.84481,4.46887 z"},
	path4000: { path: "m 149.19404,271.43141 c -1.40126,-2.58797 -3.22099,-6.04877 -4.04385,-7.69065 l -1.4961,-2.98524 4.12496,-1.86606 c 2.26872,-1.02633 5.83428,-2.58648 7.92347,-3.467 l 3.79851,-1.60095 6.97593,5.8067 c 3.83676,3.19369 7.03655,5.96961 7.11064,6.16871 0.10301,0.27683 -18.90298,9.32947 -21.35418,10.1711 -0.2704,0.0928 -1.63812,-1.94863 -3.03938,-4.53661 z"},
	path4002: { path: "m 148.28422,289.3412 c -1.62522,-3.62406 -2.87914,-6.66195 -2.7865,-6.75086 0.4779,-0.45862 26.13848,-11.63221 26.31301,-11.45768 0.89581,0.89581 5.8811,12.55643 5.51491,12.89938 -0.47898,0.44857 -25.32142,11.89837 -25.8157,11.89837 -0.14892,0 -1.6005,-2.96514 -3.22572,-6.58921 z"},
	path4004: { path: "m 120.22823,301.44212 c -1.78625,-4.06529 -3.04546,-7.59141 -2.79825,-7.83582 0.43876,-0.43379 23.11189,-10.15156 23.68523,-10.15156 0.15915,0 1.9161,3.24578 3.90434,7.21284 l 3.61499,7.21283 -8.85617,3.88053 c -4.8709,2.13429 -10.53158,4.59875 -12.57929,5.47657 l -3.72312,1.59605 -3.24773,-7.39144 z"},
	path4006: { path: "m 148.78509,322.03425 c -2.65108,-0.57699 -8.47542,-1.63614 -12.94298,-2.35367 l -8.12284,-1.30461 -0.82508,-1.9747 c -1.87286,-4.48238 -2.56225,-3.83009 10.09353,-9.55036 6.3326,-2.86227 11.83182,-5.27818 12.22047,-5.3687 1.06515,-0.24808 10.48656,20.12939 9.54924,20.65395 -1.65018,0.92348 -5.43885,0.88477 -9.97234,-0.10191 z"},
	path4008: { path: "m 157.43886,310.57484 -5.10943,-10.39136 7.90661,-3.88379 c 4.34863,-2.13608 7.96305,-3.79478 8.03205,-3.68599 0.80558,1.27022 11.72781,24.74003 11.71863,25.18114 -0.007,0.33808 -3.28595,1.03715 -7.52622,1.6046 -4.13256,0.55304 -8.05341,1.1318 -8.71298,1.28614 -1.06326,0.24881 -1.77857,-0.8976 -6.30866,-10.11074 z"},
	path4010: { path: "m 174.46151,298.57838 c -1.92525,-3.79557 -3.32257,-7.07746 -3.10515,-7.29309 0.9715,-0.9635 25.31536,-11.76788 25.64491,-11.38181 0.20298,0.23779 2.29551,3.137 4.65007,6.44269 l 4.28102,6.01034 -13.68789,6.42726 c -7.52835,3.53499 -13.82169,6.48765 -13.9852,6.56145 -0.16352,0.0738 -1.87251,-2.97127 -3.79776,-6.76684 z"},
	path4012: { path: "m 181.38369,313.49006 c -1.17802,-2.80921 -2.04086,-5.20734 -1.91741,-5.32918 0.28857,-0.28482 27.60031,-12.79754 27.93342,-12.79754 0.41398,0 11.26119,15.3746 11.01846,15.61733 -0.12338,0.12338 -7.48401,1.76114 -16.35696,3.63946 -8.87296,1.87832 -16.67332,3.54168 -17.33415,3.69635 -1.05136,0.24608 -1.46917,-0.35707 -3.34336,-4.82642 z"},
	path4014: { path: "m 229.90049,175.92901 c -4.23714,-3.88115 -7.04907,-6.95992 -8.08222,-8.84919 -0.87141,-1.5935 -1.51997,-2.95483 -1.44123,-3.02516 0.0787,-0.0703 5.88479,-1.90471 12.90236,-4.07638 l 12.7592,-3.94849 0.47892,1.35319 c 0.62519,1.76647 -0.41056,3.01629 -2.49965,3.01629 -0.87908,0 -1.74018,0.22953 -1.91356,0.51006 -0.17338,0.28053 0.0331,2.3521 0.45878,4.60348 l 0.77401,4.09342 -2.86782,6.17096 c -1.5773,3.39403 -3.13852,6.15584 -3.46939,6.13735 -0.33087,-0.0185 -3.5256,-2.71198 -7.0994,-5.98553 z"},
	path4016: { path: "m 245.04767,190.87784 -4.86258,-5.2973 3.31461,-6.91988 3.3146,-6.91987 4.50056,0 4.50056,0 3.47596,9.25139 c 1.91178,5.08827 3.47596,9.51479 3.47596,9.83671 0,0.32193 -2.61563,1.55287 -5.81253,2.73542 -3.19689,1.18255 -6.08973,2.25376 -6.42854,2.38046 -0.33881,0.12671 -2.80418,-2.15341 -5.4786,-5.06693 z"},
	path4018: { path: "m 261.81369,178.62556 c -2.54553,-6.12581 -4.75795,-11.90339 -4.9165,-12.83907 -0.15854,-0.93567 -0.43104,-2.084 -0.60555,-2.55184 -0.17451,-0.46784 -0.11714,-1.16375 0.12749,-1.54646 0.51032,-0.79838 26.87116,-6.49897 27.38547,-5.92216 0.18644,0.20909 1.04869,2.93201 1.9161,6.05093 0.86741,3.11892 1.68497,5.95289 1.8168,6.29772 0.13386,0.35015 -0.9598,0.96279 -2.47712,1.38761 -1.96442,0.55 -3.62147,1.64043 -5.98354,3.93747 -2.91992,2.83953 -3.26675,3.42134 -3.26675,5.47992 0,1.26671 -0.16043,3.47353 -0.3565,4.90405 -0.29284,2.13651 -0.62194,2.69624 -1.843,3.13457 -0.81757,0.29349 -2.76498,1.04471 -4.32758,1.66936 l -2.84108,1.13574 -4.62824,-11.13784 z"},
	path4020: { path: "m 289.18326,161.67413 c -1.11741,-3.35342 -2.03165,-6.35453 -2.03165,-6.66913 0,-0.3146 4.01915,-1.29777 8.93144,-2.18483 4.9123,-0.88707 11.0466,-2.0965 13.63178,-2.68763 2.58519,-0.59113 5.02819,-1.07479 5.4289,-1.07479 0.44462,0 0.98305,1.36843 1.38153,3.51117 0.35914,1.93114 0.59557,3.55223 0.5254,3.60241 -0.0702,0.0502 -3.44496,1.85106 -7.49955,4.00194 -6.073,3.22159 -16.41136,7.5955 -17.95778,7.5975 -0.20813,2.7e-4 -1.29266,-2.74322 -2.41007,-6.09664 z"},
	path4022: { path: "m 255.72602,155.72851 c -0.97616,-4.78503 -1.94232,-3.86705 10.94131,-10.39579 6.43203,-3.25941 13.86367,-7.06675 16.51475,-8.46075 2.70862,-1.42426 6.00285,-2.69255 7.52001,-2.89523 l 2.69986,-0.36069 -4.28088,8.97107 c -2.35449,4.9341 -4.34933,9.03952 -4.43298,9.12317 -0.0836,0.0837 -4.98624,0.93288 -10.89465,1.88717 -5.90841,0.95428 -11.6357,1.95635 -12.72732,2.22681 -5.11136,1.26637 -5.06204,1.26725 -5.3401,-0.0958 z"},
	path4024: { path: "m 293.65561,141.84972 4.70176,-8.95363 6.64431,-1.03183 c 3.65438,-0.56751 6.74587,-0.93028 6.86999,-0.80616 0.50808,0.50808 2.95587,13.77329 2.60074,14.09407 -0.21158,0.19111 -5.61597,1.41897 -12.00975,2.72855 -6.39378,1.30959 -12.0489,2.50292 -12.56694,2.65185 -0.63705,0.18314 0.5798,-2.62696 3.75989,-8.68285 z"},
	path4026: { path: "m 309.89106,114.5669 c 4.46923,-8.3852 3.7286,-7.80799 8.27615,-6.45003 2.12276,0.63389 5.71649,1.69668 7.98607,2.36174 l 4.1265,1.20921 -1.00759,1.71356 c -2.04783,3.48266 -2.46138,3.67038 -11.01885,5.00154 -4.47434,0.69601 -8.87532,1.41046 -9.77997,1.58767 l -1.64481,0.3222 3.0625,-5.74589 z"},
	path4028: { path: "m 323.44446,106.27037 c -4.21053,-1.00124 -7.61022,-2.06315 -7.55485,-2.3598 0.0922,-0.49406 4.59997,-8.709034 5.06893,-9.237653 0.11178,-0.125997 3.77623,0.741001 8.14324,1.926662 l 7.94,2.155749 -1.81021,3.177022 c -0.99562,1.74736 -2.20493,3.87716 -2.68736,4.73289 -0.48243,0.85573 -1.00474,1.52656 -1.16068,1.49072 -0.15595,-0.0358 -3.72853,-0.88435 -7.93907,-1.88559 z"},
	path4030: { path: "m 330.42766,93.584162 c -3.80059,-1.146538 -7.07031,-2.249597 -7.26605,-2.451242 -0.48402,-0.498629 4.11491,-9.557201 4.85208,-9.557201 1.28239,0 15.31072,4.147594 15.15812,4.481626 -0.90921,1.99018 -5.33348,9.684443 -5.55045,9.652793 -0.15594,-0.02275 -3.39311,-0.979438 -7.1937,-2.125976 z"},
	path4032: { path: "m 336.66815,80.58693 -7.47459,-1.989295 2.58945,-5.21278 2.58944,-5.21278 5.73576,1.612333 c 3.15466,0.886784 6.70353,1.873884 7.88636,2.193556 l 2.15062,0.581222 -2.37178,4.366497 c -1.30448,2.401574 -2.65503,4.655408 -3.00123,5.00852 -0.46758,0.476921 -2.5516,0.130458 -8.10403,-1.347273 z"},
	path4034: { path: "m 344.00097,66.945053 c -4.13257,-1.13329 -7.51376,-2.240769 -7.51376,-2.461064 0,-1.112627 4.76143,-9.031598 5.31338,-8.836952 0.3525,0.124311 3.98076,1.084749 8.06279,2.134306 l 7.42187,1.908286 -2.43361,4.554658 c -1.33849,2.505063 -2.63685,4.601151 -2.88526,4.657975 -0.24841,0.05683 -3.83285,-0.823919 -7.96541,-1.957209 z"},
	path4036: { path: "m 350.09703,54.422326 c -3.58675,-0.829761 -6.52137,-1.758279 -6.52137,-2.063374 0,-1.25138 3.88813,-9.344395 4.48933,-9.344395 0.70043,0 14.67921,3.958119 14.9612,4.236294 0.0935,0.09221 -0.79184,2.111379 -1.96735,4.48705 -1.65646,3.347655 -2.39637,4.305193 -3.28887,4.256241 -0.63336,-0.03474 -4.08618,-0.742056 -7.67294,-1.571816 z"},
	path4038: { path: "m 356.61841,42.311055 c -3.74271,-0.951374 -6.88039,-1.789388 -6.97263,-1.862255 -0.0922,-0.07287 0.39094,-1.282349 1.07373,-2.687741 1.13785,-2.342047 1.52948,-2.642467 4.69352,-3.600463 2.3875,-0.722875 3.95446,-1.617374 5.08109,-2.900534 1.62301,-1.848508 1.64858,-1.855327 6.95747,-1.855327 2.93066,0 5.32848,0.124996 5.32848,0.277768 0,0.152772 -1.59018,3.470166 -3.53372,7.371987 -2.82796,5.677357 -3.76233,7.083446 -4.67838,7.040277 -0.62956,-0.02967 -4.20686,-0.832339 -7.94956,-1.783712 z"},
	path4040: { path: "m 388.66853,43.181798 c -4.20486,-1.068272 -7.74435,-2.04147 -7.86554,-2.162663 -0.1212,-0.121193 0.7673,-2.558645 1.97443,-5.416561 l 2.19478,-5.19621 3.96953,0.363952 c 2.22965,0.204428 6.00636,1.131217 8.61652,2.114461 l 4.647,1.75051 -2.60941,4.89848 c -1.43517,2.694164 -2.76077,5.054149 -2.94576,5.244412 -0.185,0.190261 -3.7767,-0.52811 -7.98155,-1.596381 z"},
	path4042: { path: "m 407.22993,49.069916 c -3.66473,-0.989325 -6.66314,-2.082857 -6.66314,-2.430071 0,-0.571533 4.37438,-10.428627 4.84631,-10.920528 0.29432,-0.306782 16.13755,4.031686 16.1233,4.415161 -0.007,0.180531 -1.22718,2.624895 -2.71215,5.431921 -1.90328,3.597771 -3.02912,5.132984 -3.81556,5.202985 -0.61359,0.05462 -4.11403,-0.710144 -7.77876,-1.699468 z"},
	path4044: { path: "m 401.84271,60.98395 c -3.82068,-0.969211 -6.94668,-1.972754 -6.94668,-2.230096 0,-0.257341 0.80217,-2.333379 1.78261,-4.613417 l 1.78261,-4.145523 7.99945,1.982679 c 4.3997,1.090474 8.07592,2.041885 8.1694,2.114248 0.0935,0.07236 -0.79184,2.0753 -1.96735,4.450971 -1.33387,2.695705 -2.4636,4.297587 -3.00533,4.26137 -0.47742,-0.03192 -3.99404,-0.851022 -7.81471,-1.820232 z"},
	path4046: { path: "m 382.42036,56.630334 c -4.21054,-1.157922 -7.65553,-2.334713 -7.65553,-2.615092 0,-1.308178 3.97616,-9.299457 4.62706,-9.299457 0.83014,0 14.94974,3.778665 15.19723,4.067058 0.0878,0.102306 -0.89177,2.383539 -2.17681,5.069406 l -2.33643,4.883396 -7.65552,-2.105311 z"},
	path4048: { path: "m 375.89899,68.956432 c -4.36649,-0.95423 -7.9951,-1.772352 -8.06357,-1.818051 -0.14715,-0.09819 3.26385,-8.993026 3.57437,-9.320876 0.20096,-0.212176 15.9358,3.809958 16.80686,4.296164 0.43652,0.243656 -3.56982,8.725372 -4.07765,8.632667 -0.16552,-0.03022 -3.87353,-0.835674 -8.24001,-1.789904 z"},
	path4050: { path: "m 368.527,82.262098 c -4.05459,-1.114064 -7.46416,-2.092878 -7.57682,-2.175142 -0.11266,-0.08226 0.95978,-2.286093 2.38321,-4.897396 l 2.58804,-4.747826 7.91874,2.022768 c 4.35531,1.112522 8.0553,2.15935 8.22219,2.326283 0.50301,0.503133 -4.54412,9.330529 -5.38415,9.41683 -0.42857,0.04403 -4.09662,-0.831453 -8.15121,-1.945517 z"},
	path4052: { path: "m 362.90904,95.134674 c -4.33744,-0.901596 -7.97611,-1.729123 -8.08594,-1.838949 -0.40442,-0.404424 4.42307,-10.018778 5.03056,-10.018778 0.34588,0 4.13555,0.923768 8.42149,2.052819 l 7.79263,2.05282 -0.85788,2.058481 c -1.53137,3.674474 -3.57297,7.447074 -3.99884,7.389287 -0.22867,-0.03103 -3.96457,-0.794083 -8.30202,-1.69568 z"},
	path4054: { path: "m 343.86516,113.27633 c 0.38782,-0.74913 2.60879,-4.87083 4.93548,-9.15934 3.46096,-6.379183 4.45343,-7.791386 5.45698,-7.764795 2.35168,0.06232 10.29985,2.037987 10.29985,2.560229 0,0.289402 -1.58918,3.494406 -3.53152,7.122236 l -3.53151,6.59604 -4.40755,0.63502 c -2.42415,0.34926 -5.64939,0.80099 -7.16721,1.00384 l -2.75966,0.36883 0.70514,-1.36206 z"},
	path4056: { path: "m 362.5888,110.43962 c 0.39262,-0.7484 1.86952,-3.40219 3.28201,-5.89733 1.41249,-2.49513 2.59427,-4.585442 2.62619,-4.645132 0.089,-0.166444 21.9095,5.353802 22.16246,5.606762 0.35547,0.35547 -0.38958,2.72437 -0.85686,2.72437 -0.83982,0 -23.59329,2.82339 -25.73577,3.19346 -2.17089,0.37497 -2.18504,0.36556 -1.47803,-0.98213 z"},
	path4058: { path: "m 383.4465,100.7105 -8.33061,-2.27961 2.52378,-5.02513 c 1.38807,-2.763822 2.71259,-5.030235 2.94338,-5.036474 1.56096,-0.0422 15.44819,3.77115 15.45247,4.243153 0.008,0.930141 -3.62655,10.519691 -3.95922,10.444911 -0.16455,-0.037 -4.04796,-1.09307 -8.6298,-2.34685 z"},
	path4060: { path: "m 389.50881,87.405732 c -4.05459,-1.078139 -7.45184,-2.038921 -7.54944,-2.135072 -0.0976,-0.09615 0.92314,-2.322882 2.26831,-4.94829 l 2.44575,-4.77347 8.08083,1.954092 c 4.44446,1.074751 8.08083,2.181265 8.08083,2.458921 0,1.212341 -4.61728,9.545665 -5.25178,9.478469 -0.38638,-0.04092 -4.01991,-0.956512 -8.0745,-2.03465 z"},
	path4062: { path: "m 395.74664,74.371247 c -4.05459,-1.090639 -7.43686,-2.043414 -7.51614,-2.117278 -0.36582,-0.340789 3.62652,-8.999743 4.26188,-9.243551 0.61754,-0.236974 14.99008,3.006481 16.13937,3.642179 0.58021,0.320925 -4.2244,9.831956 -4.93065,9.760534 -0.32036,-0.0324 -3.89986,-0.951245 -7.95446,-2.041884 z"},
	path4064: { path: "m 327.98107,141.93554 c 0,-0.17451 -0.63948,-3.15015 -1.42106,-6.61251 -0.78158,-3.46237 -1.33644,-6.37984 -1.23301,-6.48326 0.35153,-0.35154 15.31151,-3.03939 15.55596,-2.79494 0.42642,0.42642 3.60611,13.49886 3.34655,13.75842 -0.31597,0.31597 -13.26423,2.42546 -14.97252,2.43927 -0.70175,0.006 -1.27592,-0.13246 -1.27592,-0.30698 z"},
	path4066: { path: "m 346.73491,132.86747 c -0.99972,-3.63312 -1.71092,-6.71242 -1.58046,-6.84288 0.13047,-0.13047 3.52878,-0.95833 7.55181,-1.83969 l 7.3146,-1.60247 2.3334,7.14159 c 1.28338,3.92788 2.30411,7.18194 2.26831,7.23125 -0.0358,0.0493 -2.99972,0.50523 -6.58647,1.01316 -3.58676,0.50794 -7.18786,1.05428 -8.00245,1.21411 -1.45274,0.28504 -1.51585,0.16422 -3.29874,-6.31507 z"},
	path4068: { path: "m 330.24322,151.30116 c -0.69697,-2.82072 -1.14776,-5.24805 -1.00174,-5.39407 0.14601,-0.14601 4.57927,-0.87926 9.85167,-1.62942 5.27241,-0.75017 15.45543,-2.38814 22.62894,-3.63993 8.80172,-1.53592 15.72688,-2.40145 21.29747,-2.66182 l 8.25473,-0.38584 0.70331,3.81699 c 0.38682,2.09935 0.58375,3.93654 0.43764,4.08266 -0.14611,0.14611 -6.09111,1.49572 -13.2111,2.99914 -9.45825,1.99714 -14.11908,3.26874 -17.30231,4.72053 -5.55552,2.53373 -10.10726,3.22034 -21.34848,3.22034 l -9.0429,0 -1.26723,-5.12858 z"},
	path4070: { path: "m 366.80205,131.64508 c -0.83888,-2.74276 -1.83867,-6.02206 -2.22175,-7.28734 l -0.69651,-2.30052 4.66464,-0.96017 c 5.02174,-1.03367 10.83726,-1.24862 12.1024,-0.44731 0.61931,0.39226 1.88582,6.57784 2.88483,14.08935 0.0104,0.078 -1.83123,0.148 -4.09245,0.15563 -3.60917,0.0122 -7.01908,0.49849 -10.16545,1.44981 -0.76939,0.23262 -1.24105,-0.66271 -2.47571,-4.69945 z"},
	path4072: { path: "m 386.11582,133.60493 c -0.41259,-1.22636 -2.11263,-12.97176 -1.90685,-13.17423 0.35552,-0.34983 15.35676,-1.4839 15.65701,-1.18365 0.34679,0.34679 2.93911,11.56132 2.95845,12.79842 0.0109,0.69705 -0.74488,0.81728 -4.18632,0.66596 -3.01163,-0.13242 -4.68838,0.0681 -5.92745,0.70885 -2.07646,1.07378 -6.25634,1.19081 -6.59484,0.18465 z"},
	path4074: { path: "m 405.76108,125.49232 c -0.70899,-3.63787 -1.2108,-6.68081 -1.11514,-6.76208 0.30749,-0.26127 15.42753,-1.95874 15.63139,-1.75488 0.6114,0.6114 2.54023,13.45546 2.08404,13.8776 -0.29108,0.26935 -3.85518,0.66162 -7.92023,0.8717 l -7.391,0.38197 -1.28906,-6.61431 z"},
	path4076: { path: "m 426.33885,129.49363 c -0.55942,-2.41424 -2.52195,-12.3396 -2.52195,-12.75456 0,-0.24067 2.23286,-0.60435 4.96191,-0.80818 2.72906,-0.20384 6.26623,-0.51418 7.86038,-0.68966 l 2.89846,-0.31905 1.55548,6.26989 c 0.85551,3.44845 1.59268,6.72702 1.63814,7.28573 0.074,0.90896 -0.77014,1.07549 -8.02347,1.58291 -7.87704,0.55105 -8.11358,0.53502 -8.36895,-0.56708 z"},
	path4078: { path: "m 446.23266,128.55088 c -0.49503,-1.3918 -3.15434,-13.12097 -3.00186,-13.24007 0.36565,-0.28561 15.817,-2.09568 16.03432,-1.87835 0.13348,0.13348 0.97765,3.33935 1.87592,7.12414 l 1.63321,6.88145 -2.04109,0.30137 c -1.1226,0.16576 -3.82738,0.44953 -6.01062,0.63061 -2.18325,0.18108 -4.92591,0.46651 -6.09482,0.63428 -1.48289,0.21285 -2.20683,0.0758 -2.39506,-0.45343 z"},
	path4080: { path: "m 464.45344,120.12903 c -0.84679,-3.82512 -1.46878,-7.01936 -1.38219,-7.09832 0.43278,-0.39464 14.93452,-1.30286 15.23811,-0.95433 0.42758,0.49087 4.56176,13.84397 4.34969,14.0492 -0.0824,0.0797 -3.86594,0.32796 -8.40789,0.5516 l -8.2581,0.40662 -1.53962,-6.95477 z"},
	path4082: { path: "m 435.88463,97.990274 c -1.1765,-5.384625 -1.19393,-5.80998 -0.31386,-7.655525 0.51252,-1.074766 1.14103,-1.954119 1.39667,-1.954119 0.42595,0 13.97482,3.693342 15.64083,4.263598 0.50727,0.173634 -0.0283,1.739044 -1.80618,5.27897 l -2.5273,5.032142 -3.52245,0.36817 c -1.93735,0.20249 -4.44485,0.36817 -5.57223,0.36817 l -2.04976,0 -1.24572,-5.701406 z"},
	path4084: { path: "m 405.67047,106.83159 c 0,-0.32486 1.77227,-4.78904 3.31886,-8.359906 l 1.15562,-2.668153 4.99298,1.738489 c 4.2212,1.469767 5.95361,1.759205 11.20778,1.872513 l 6.2148,0.134024 0.64681,2.535473 0.6468,2.53547 -13.38298,1.25103 c -14.24833,1.33192 -14.80067,1.36778 -14.80067,0.96106 z"},
	path4086: { path: "m 417.49498,95.084722 -6.03839,-1.705854 2.06886,-5.085755 c 2.41126,-5.927494 1.14375,-5.681796 12.33582,-2.391209 l 6.98459,2.053543 -0.86964,1.681708 c -0.58394,1.129206 -0.75053,2.386738 -0.50708,3.827688 l 0.36256,2.145981 -3.29856,0.275599 c -1.8142,0.151579 -3.68133,0.417024 -4.14916,0.589876 -0.46784,0.172853 -3.56789,-0.453357 -6.889,-1.391577 z"},
	path4088: { path: "m 428.35351,83.495203 c -2.65108,-0.772668 -6.1412,-1.77753 -7.75582,-2.233027 l -2.93567,-0.828177 1.71041,-5.099899 c 0.94073,-2.804945 1.87941,-5.099899 2.08596,-5.099899 0.69952,0 16.11818,4.497433 16.40625,4.7855 0.27047,0.270467 -4.16706,10.00224 -4.52309,9.919412 -0.0923,-0.02148 -2.33696,-0.671243 -4.98804,-1.44391 z"},
	path4090: { path: "m 431.14322,69.498693 -8.26827,-2.305183 2.16666,-4.859258 c 1.87209,-4.198606 2.34089,-4.837975 3.44813,-4.70271 1.25309,0.153083 14.72761,3.582518 15.05894,3.832692 0.0922,0.06963 -0.76391,2.45413 -1.90251,5.298895 -1.13859,2.844765 -2.10719,5.1427 -2.15243,5.106523 -0.0452,-0.03618 -3.80297,-1.103108 -8.35052,-2.370959 z"},
	path4092: { path: "m 451.28379,74.495753 c -3.76266,-1.005629 -7.12995,-1.9293 -7.48287,-2.052602 -0.40634,-0.141968 0.18568,-1.981381 1.61428,-5.015603 1.24077,-2.63528 2.31582,-4.851288 2.38899,-4.924463 0.17951,-0.179507 16.3329,3.630359 16.62322,3.920676 0.12605,0.126049 -0.80614,2.438476 -2.07152,5.138727 -1.63198,3.482558 -2.5812,4.888058 -3.26579,4.835615 -0.53081,-0.04067 -4.04365,-0.896721 -7.80631,-1.90235 z"},
	path4094: { path: "m 445.30612,87.333309 -7.14811,-2.071597 1.93225,-4.518946 c 1.06274,-2.48542 2.00776,-4.594451 2.10005,-4.686735 0.15715,-0.157152 15.74326,3.819756 16.09833,4.107605 0.09,0.07297 -0.72105,2.143031 -1.80235,4.600139 -1.35815,3.086201 -2.2854,4.494315 -2.99903,4.554299 -0.56816,0.04776 -4.24968,-0.845387 -8.18114,-1.984765 z"},
	path4096: { path: "m 456.342,61.305567 -7.45375,-1.97022 2.53856,-5.750323 c 1.39621,-3.162677 2.71767,-5.937692 2.93657,-6.1667 0.2189,-0.229007 3.98709,0.773359 8.37375,2.227482 l 7.97574,2.643859 -2.60795,5.55545 c -1.67176,3.561198 -2.91329,5.533055 -3.45855,5.493061 -0.46784,-0.03431 -4.20481,-0.948988 -8.30437,-2.032609 z"},
	path4098: { path: "m 437.0421,56.43529 c -3.7983,-0.987622 -7.04596,-1.938595 -7.21702,-2.113272 -0.17106,-0.174678 0.55377,-2.726519 1.61075,-5.670759 l 1.92177,-5.353164 3.59402,0.168381 c 5.2875,0.247721 13.52132,1.82413 13.49736,2.584143 -0.0487,1.546605 -4.98317,12.000265 -5.70488,12.085899 -0.4378,0.05195 -3.9037,-0.713605 -7.702,-1.701228 z"},
	path4100: { path: "m 486.47879,70.469896 c -3.7427,-1.065772 -7.12188,-2.056387 -7.50928,-2.201368 -0.51092,-0.191203 -0.10708,-1.943265 1.47033,-6.379182 1.19609,-3.36357 2.30961,-6.115581 2.47448,-6.115581 0.87845,0 16.32368,6.287162 16.32368,6.644743 0,1.256217 -4.5777,10.076721 -5.20882,10.036576 -0.41001,-0.02608 -3.80769,-0.919416 -7.55039,-1.985188 z"},
	path4102: { path: "m 481.09157,83.638131 c -4.52243,-1.248496 -8.31201,-2.333963 -8.42129,-2.412149 -0.39397,-0.281869 3.48079,-9.857629 3.98881,-9.857629 0.66026,0 16.55619,3.995625 16.77788,4.217315 0.25283,0.252833 -3.32812,9.933798 -3.75098,10.140605 -0.2045,0.100018 -4.07199,-0.839646 -8.59442,-2.088142 z"},
	path4104: { path: "m 508.02767,76.831674 c -5.30216,-1.250614 -9.70981,-2.316714 -9.79479,-2.369109 -0.24548,-0.151367 3.37447,-9.558829 3.90142,-10.138925 0.28816,-0.317229 1.05875,-0.257541 1.95662,0.151556 0.81468,0.371192 4.95979,1.448749 9.21135,2.394571 4.25156,0.945821 7.80111,1.790682 7.8879,1.877469 0.16066,0.160661 -3.10438,10.092211 -3.37438,10.264148 -0.0813,0.05177 -4.48596,-0.929095 -9.78812,-2.17971 z"},
	path4106: { path: "m 510.29598,91.098544 c -1.24757,-0.312028 -5.31139,-1.300026 -9.03072,-2.195552 -3.71933,-0.895526 -6.97542,-1.841228 -7.23575,-2.101561 -0.69041,-0.690413 2.37441,-8.628168 3.3314,-8.628168 0.82991,0 19.04285,4.501069 19.31528,4.773496 0.39592,0.395928 -2.97432,8.829472 -3.50779,8.777718 -0.33227,-0.03224 -1.62486,-0.313905 -2.87242,-0.625933 z"},
	path4108: { path: "m 483.28924,97.959139 c 1.62461,-4.162556 4.06459,-9.011433 4.5346,-9.011433 0.80035,0 24.07035,5.662262 24.32773,5.919639 0.12089,0.120885 -0.18839,0.842761 -0.68728,1.604167 -0.88973,1.357899 -1.1048,1.391768 -11.24506,1.7709 -5.68589,0.212588 -11.94026,0.5409 -13.89859,0.72958 l -3.5606,0.343056 0.5292,-1.355909 z"},
	path4110: { path: "m 465.21344,101.09858 c 0,-0.2174 6.21418,-15.056273 6.49657,-15.513194 0.23903,-0.386765 8.84065,1.402229 12.05426,2.507087 0.46641,0.160352 -0.14229,2.025308 -1.89019,5.791271 -1.41798,3.055114 -2.68235,5.658962 -2.80972,5.786328 -0.22436,0.224363 -13.85092,1.629738 -13.85092,1.428508 z"},
	path4112: { path: "m 490.34791,117.52377 c -0.9909,-4.01441 -1.72087,-7.3797 -1.62214,-7.47842 0.0987,-0.0987 3.38308,-0.33086 7.29857,-0.51587 l 7.11908,-0.33638 0.29689,1.36059 c 0.5871,2.6905 2.07785,13.13234 1.90023,13.30996 -0.0999,0.0999 -3.10868,0.35649 -6.68627,0.5703 l -6.50472,0.38874 -1.80164,-7.29892 z"},
	path4114: { path: "m 508.63628,117.40445 c -0.53873,-3.01959 -1.11289,-6.15967 -1.27591,-6.97795 l -0.29641,-1.48779 5.58554,-0.38789 c 3.07205,-0.21334 6.35846,-0.51859 7.30315,-0.67834 l 1.71761,-0.29045 1.24229,7.23981 c 0.68325,3.98189 1.18625,7.28216 1.11776,7.33392 -0.0685,0.0518 -3.33977,0.23919 -7.26952,0.41649 l -7.14501,0.32237 -0.9795,-5.49017 z"},
	path4116: { path: "m 527.33474,121.12926 c -0.39719,-1.27137 -2.11526,-13.55394 -1.91884,-13.71789 0.3119,-0.26033 14.65156,-0.88118 14.65156,-0.63435 0,0.12451 0.64629,3.21561 1.4362,6.86912 0.78992,3.65351 1.30146,6.77749 1.13676,6.94219 -0.33186,0.33186 -8.85529,1.14638 -12.65635,1.20948 -1.47677,0.0245 -2.51463,-0.23739 -2.64933,-0.66855 z"},
	path4118: { path: "m 527.35368,94.17306 c 0.45633,-1.470432 1.23565,-4.093548 1.73182,-5.829146 l 0.90212,-3.155633 9.7183,2.231173 c 5.34506,1.227145 9.9111,2.406173 10.14675,2.620061 0.23565,0.213889 0.0266,1.568422 -0.46467,3.010075 l -0.89313,2.621186 -3.50486,0.302379 c -1.92767,0.166308 -6.87112,0.430862 -10.98544,0.587898 l -7.48059,0.28552 0.8297,-2.673513 z"},
	path4120: { path: "m 540.85185,84.261918 -9.70652,-2.302866 2.19326,-5.390364 c 1.2063,-2.9647 2.29582,-5.492915 2.42116,-5.618256 0.2247,-0.224706 18.54612,4.354717 19.00399,4.750032 0.48487,0.418621 -2.97186,10.976602 -3.57579,10.921629 -0.34627,-0.03152 -4.99752,-1.093599 -10.3361,-2.360175 z"},
	path4122: { path: "m 552.54313,95.520513 c 0,-0.741955 5.24778,-17.647514 5.59325,-18.018491 0.35525,-0.381473 11.82894,4.27445 12.73319,5.167017 0.45077,0.44495 -2.19117,11.297658 -2.9296,12.034349 -0.48929,0.488137 -15.39684,1.279296 -15.39684,0.817125 z"},
	path4124: { path: "m 581.60577,94.761251 c -5.06824,-0.09398 -9.20891,-0.355948 -9.20149,-0.58214 0.007,-0.226193 0.61901,-2.452733 1.35909,-4.947867 0.91372,-3.080525 1.59193,-4.476437 2.11305,-4.349138 0.92122,0.225034 23.34846,9.774745 23.68675,10.086024 0.12996,0.119576 -1.78392,0.160393 -4.25306,0.09071 -2.46915,-0.06969 -8.6361,-0.203601 -13.70434,-0.297585 z"},
	path4126: { path: "m 546.03656,118.93217 c -0.17934,-0.74092 -0.79187,-3.83518 -1.36116,-6.87612 l -1.03508,-5.52899 8.41013,0 c 8.25931,0 8.41524,0.0229 8.69453,1.27592 0.74935,3.36193 2.07211,11.32121 1.90756,11.47816 -0.10207,0.0974 -3.80905,0.36178 -8.23774,0.58759 l -8.05215,0.41057 -0.32609,-1.34713 z"},
	path4128: { path: "m 565.89064,118.86096 c -0.39357,-1.2305 -2.06213,-11.89971 -1.8882,-12.07364 0.0914,-0.0914 3.74771,-0.34796 8.12516,-0.57016 l 7.95901,-0.40401 0.97788,6.16948 c 0.53784,3.39322 0.97535,6.48846 0.97224,6.87833 -0.004,0.53313 -1.97809,0.70884 -7.96251,0.70884 -5.86652,0 -8.01642,-0.18622 -8.18358,-0.70884 z"},
	path4130: { path: "m 584.92381,115.17497 c -0.37488,-2.72906 -0.82894,-5.91886 -1.00903,-7.08845 l -0.32743,-2.12654 7.728,0 c 4.2504,0 7.72801,0.10718 7.72801,0.23817 0,0.131 0.63796,3.18887 1.41768,6.79528 0.77973,3.60641 1.41769,6.68904 1.41769,6.85028 0,0.16124 -3.66149,0.29317 -8.13666,0.29317 l -8.13667,0 -0.68159,-4.96191 z"},
	path4132: { path: "m 603.67449,113.60384 c -0.70027,-3.59317 -1.4181,-6.91056 -1.59516,-7.37198 -0.27542,-0.71774 0.91584,-0.83895 8.24487,-0.83895 l 8.56681,0 0,7.37198 0,7.37199 -6.97165,0 -6.97165,0 -1.27322,-6.53304 z"},
	path4134: { path: "m 631.27118,122.48604 c -1.76793,-0.51231 -3.40536,-1.12286 -3.63873,-1.35678 -0.23338,-0.23392 -1.53012,-0.4253 -2.88165,-0.4253 l -2.45733,0 0,-7.93907 c 0,-6.55431 0.1433,-7.93906 0.8216,-7.93906 0.92867,0 21.48667,12.82469 21.7447,13.56499 0.0917,0.26321 -1.05659,1.36854 -2.55184,2.45628 -3.38239,2.46057 -6.56862,2.93372 -11.03675,1.63894 z"},
	path4136: { path: "m 664.33433,142.34717 c -8.18832,-3.43718 -16.15491,-7.77004 -19.00134,-10.33442 -0.66125,-0.59572 8.70051,-7.41501 9.50483,-6.92349 2.22154,1.35757 30.30356,19.13929 31.10024,19.69288 0.80682,0.56063 -0.1515,0.77621 -5.35411,1.20447 l -6.33682,0.52163 -9.9128,-4.16107 z"},
	path4138: { path: "m 665.70975,154.83871 c -0.20924,-0.65926 -2.84854,-2.09684 -7.4102,-4.03621 -3.89687,-1.65674 -7.08521,-3.19867 -7.08521,-3.42653 0,-0.22785 0.98134,-0.85679 2.18075,-1.39765 1.82292,-0.82203 2.13774,-1.20836 1.91866,-2.35443 -0.14415,-0.75408 -0.14721,-1.37105 -0.007,-1.37105 0.14042,0 4.4445,1.74921 9.56463,3.88713 l 9.30932,3.88713 5.67076,-0.7478 c 8.00014,-1.05498 7.42601,-1.21096 9.3147,2.53053 l 1.67551,3.31915 -5.49511,0.36391 c -3.0223,0.20015 -8.60391,0.36523 -12.40356,0.36684 -6.1641,0.003 -6.94349,-0.1074 -7.23346,-1.02102 z"},
	path4140: { path: "m 682.15194,172.58598 c -6.4519,-3.92913 -9.84805,-6.34488 -10.39951,-7.39737 l -0.81887,-1.56288 3.89198,0.3675 c 2.14059,0.20213 7.71974,0.3732 12.39812,0.38015 l 8.50614,0.0126 2.13963,4.95331 c 1.17679,2.72431 2.10873,5.20848 2.07096,5.52038 -0.0378,0.31189 -1.89998,1.24065 -4.13824,2.06392 l -4.06958,1.49685 -9.58063,-5.8345 z"}
	';
	// require_once("wp_load.php");

/*	$newtable = $wpdb->get_results( "SELECT ID FROM 'wp_users'" );
	print_r($newtable);*/
	/*$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
	var_dump(json_decode($json));*/
class MyParser{
		function parseIt($j){
			global $wpdb;

$user_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $wpdb->users;"));
echo '<p>Количество пользователей равно: ' . $user_count . '</p>';

/*			$arr = explode('}', $j);
			$narr = array();
			foreach ($arr as $item) {
				$inner = explode(": { path: ", $item);
				array_push($narr, $inner);
			}
			foreach ($narr as $narrItem){
				$poly = '';
				$d = '';
				foreach ($narrItem as $key => $value) {
					if($key == 0){
						$value = str_replace(",", "", $value);
						$poly = $value;
					}
					if($key == 1){
						$value = str_replace('"', '', $value);
						$d = $value;
					}
					if($poly !== '' && $d !== ''){
						$wpdb->insert(
							'wp_map_firsovo',
							array( 'element_uid' => $poly, 'd' => $d ),
							array( '%s', '%s' )
						);
						echo $value;
						$poly = '';
						$d = '';					
					}else{
						echo "Error!";
					}
				}
				echo "<br/>";
			}*/		
		}
}

$obj = new MyParser;
$obj -> parseIt($json);

/*	echo "<pre>";
	var_dump($narr);
	echo "</pre>";*/
?>