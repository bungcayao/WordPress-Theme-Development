<?php
	/**
	 * Module part for displaying Team (Flex Columns)
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */
?>
<?php
	if (get_row('popin_team')) :
		$sectionTeam = get_row('popin_team');

		$sectionTeamblock = $sectionTeam['team_members'];
		$max = count($sectionTeamblock);
?>
      <section data-module="section-team" class="section section-team">
        <div class="container">
          <div class="section is-paddingless-ltr columns is-multiline">

<?php
    for ($i = 0; $i < $max; $i++) :


      
      $image = $sectionTeamblock[$i]['image'];

      if( !$image ) :
        $getImage = 'url(http://img.wennermedia.com/social/rs-223927-elchapo-1401.jpg)';
      else :
        $getImage = wp_get_attachment_url($image);
      endif;
      
      $name = $sectionTeamblock[$i]['name'];
      if( !$name ) :
        $name = 'El Guapo';
      endif;
      
      $designation = $sectionTeamblock[$i]['designation'];
      if( !$designation ) :
        $designation = 'El Numero Uno, Dos, y Tres';
      endif;
?>
            
            <div class="column is-3 has-text-centered is-hoverable">
              <figure class="image is-190x190 button is-rounded is-centered is-flex-mobile has-bg-image is-cover columns is-vcentered is-tablet"
                      style="background-image:url(<?php echo $getImage ?>)">
                <div class="has-content has-broken-words">
                  <p class="is-size-6 is-uppercase"><?php echo $name ?></p>
                  <p class="is-size-6 has-text-weight-semibold"><?php echo $designation ?></p>
                </div>
              </figure>

            </div>
<?php
    endfor;
?>

          </div>
        </div>
      </section>
			
			
<?php
	endif;
?>