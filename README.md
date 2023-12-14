1. I would copy the live site to the staging environment then make the updates to the staging. Once I test everything is working on the staging I can push those updates to the live and delete the staging environment. Im not sure how github would is being used used - if its being used as a backup then I can download the updated files and push it to the git repo.

   
2.  The respons to this is in the functions.php file.

   
3.  This is using wp_query and passing in parameters for the loop / query as the $args variable as described:

   i . It is requesting information from a Custom post type called 'disney'.
    
ii. The post status should be 'published', it will display 5 posts per page, and will be ordered by the post title.
    
iii . It further filters these posts only to display terms from two categories 'moveis' AND 'series.
	 
 iv. Not all movies or series will display only movie posts that contain the slugs 'el-gato-con-botas' OR 'blanca-nieves'. 	Series are filtered via an id to show only these four series posts 20,21,30,31.

v. There is also additional filtering done via two custom field properties 'year' and 'available. The year is looking for posts type with the 'year' value of '2000' OR 'available' value of '0'.
