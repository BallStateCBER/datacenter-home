<?php if (! empty($latestRelease['Release'])): ?>
	<section id="latest_release">
		<h1>
			Latest Release
		</h1>
		<?php
			$title = $latestRelease['Release']['title'];
			$released = $latestRelease['Release']['released'];
			$thumbnail = $latestRelease['Graphic'][0]['thumbnail'] ?? null;
            $linkContent =
                '<span class="title">' .
                    $title .
                '</span>' .
			    '<span class="released">' .
                    'Published ' . date('F j, Y', strtotime($released)) .
                '</span>';
			if (! empty($latestRelease['Graphic'])) {
				$linkContent .= '<img src="' . $thumbnail . '"> ';
			}
			echo $this->Html->link(
				$linkContent,
				$latestRelease['Release']['url'],
				['escape' => false]
			);
		?>
		<br />
		<a href="https://projects.cberdata.org">
			View Project Library &rarr;
		</a>
		<br class="clear" />
	</section>
<?php endif; ?>

<section id="twitter">
	<h1>
		Twitter
	</h1>
	<h3>
		@BallStateCBER
	</h3>
	<a class="twitter-timeline"  href="https://twitter.com/BallStateCBER"  data-widget-id="351709426740252672">Tweets by @BallStateCBER</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</section>
