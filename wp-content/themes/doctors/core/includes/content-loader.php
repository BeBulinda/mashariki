<?php
if(tally_config('part_header')			!= ''){ include(TALLY_CONTENT_DRI.'/part_header/header.php');  					}
if(tally_config('part_subHeader')		!= ''){ include(TALLY_CONTENT_DRI.'/part_subHeader/subHeader.php');				}
if(tally_config('part_sidebar') 		!= ''){ include(TALLY_CONTENT_DRI.'/part_sidebar/sidebar.php');					}
if(tally_config('part_footerWidgets')	!= ''){ include(TALLY_CONTENT_DRI.'/part_footerWidgets/footerWidgets.php'); 	}
if(tally_config('part_footer')			!= ''){ include(TALLY_CONTENT_DRI.'/part_footer/footer.php');					}

if(tally_config('loop_404')				!= ''){ include(TALLY_CONTENT_DRI.'/loop_404/404.php'); 						}
if(tally_config('loop_attachment')		!= ''){ include(TALLY_CONTENT_DRI.'/loop_attachment/attachment.php'); 			}
if(tally_config('loop_author')			!= ''){ include(TALLY_CONTENT_DRI.'/loop_author/author.php'); 					}
if(tally_config('loop_category')		!= ''){ include(TALLY_CONTENT_DRI.'/loop_category/category.php'); 				}
if(tally_config('loop_comments')		!= ''){ include(TALLY_CONTENT_DRI.'/loop_comments/comments.php'); 				}
if(tally_config('loop_frontPage')		!= ''){ include(TALLY_CONTENT_DRI.'/loop_frontPage/frontPage.php'); 			}
if(tally_config('loop_home')			!= ''){ include(TALLY_CONTENT_DRI.'/loop_home/home.php'); 						}
if(tally_config('loop_page')			!= ''){ include(TALLY_CONTENT_DRI.'/loop_page/page.php'); 						}
if(tally_config('loop_post')			!= ''){ include(TALLY_CONTENT_DRI.'/loop_post/post.php'); 						}
if(tally_config('loop_search')			!= ''){ include(TALLY_CONTENT_DRI.'/loop_search/search.php'); 					}
if(tally_config('loop_single')			!= ''){ include(TALLY_CONTENT_DRI.'/loop_single/single.php'); 					}
if(tally_config('loop_tag')				!= ''){ include(TALLY_CONTENT_DRI.'/loop_tag/tag.php');							}
if(tally_config('loop_templateAbout')	!= ''){ include(TALLY_CONTENT_DRI.'/loop_templateAbout/templateAbout.php');		}
if(tally_config('loop_templateContact')	!= ''){ include(TALLY_CONTENT_DRI.'/loop_templateContact/templateContact.php');	}
if(tally_config('loop_templateSitemap')	!= ''){ include(TALLY_CONTENT_DRI.'/loop_templateSitemap/templateSitemap.php');	}