<?php
	$zanbil_copyright_text =zanbil_options()->getCpanelValue('footer_copyright');
?>
<div id="above-footer" class="above-footer">
	<div class="container">
		<div class="row">
			<?php if (is_active_sidebar_ZANBIL('above-footer')){ ?>
					<?php dynamic_sidebar('above-footer'); ?>
			<?php } ?>
		</div>
	</div>
</div>

	<footer id="footer" class="footer default theme-clearfix" >
		<div class="footer-top">
			<div class="sidebar-footer">
				<div class="container">
					<div class="row">
						<?php if (is_active_sidebar_ZANBIL('footer')){ ?>
								<?php dynamic_sidebar('footer'); ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright theme-clearfix clearfix">
			<?php if (is_active_sidebar_ZANBIL('footer-copyright')){ ?>
				<div class="sidebar-copyright clearfix">
					<?php dynamic_sidebar('footer-copyright'); ?>
				</div>
			<?php } ?>
			<div class="copyright-text">
			    <div class="container">
					<div class="copyright-footer pull-left">
							<p><?php  echo wp_kses( $zanbil_copyright_text, array( 'a' => array( 'href' => array(), 'title' => array(), 'class' => array() ), 'p' => array()  ) ) ; ?></p>
					</div>
					<div class="payment">
                        <a class="payment1" title="پشتیبانی از تمام درگاه های عضو شتاب" href="#"></a>
					</div>
                    <?php if(zanbil_options()->getCpanelValue('back_active') == '1') { ?>
<a id="zanbil-totop" href="#" ></a>
<?php }?>
				</div>
			</div>
		</div>
	</footer>
</div>
<div class="fixed-icon">
    <div class="ordertrack-ico">
        <a href="<?php echo get_permalink( get_page_by_title( 'پیگیری سفارشات' ) ); ?>" target="_blank"><span>پیگیری سفارش</span><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3My44IDQ3My44IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NzMuOCA0NzMuODsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgo8Zz4KCTxwYXRoIGQ9Ik00NTQuOCwxMTEuN2MwLTEuOC0wLjQtMy42LTEuMi01LjNjLTEuNi0zLjQtNC43LTUuNy04LjEtNi40TDI0MS44LDEuMmMtMy4zLTEuNi03LjItMS42LTEwLjUsMEwyNS42LDEwMC45ICAgYy00LDEuOS02LjYsNS45LTYuOCwxMC40djAuMWMwLDAuMSwwLDAuMiwwLDAuNFYzNjJjMCw0LjYsMi42LDguOCw2LjgsMTAuOGwyMDUuNyw5OS43YzAuMSwwLDAuMSwwLDAuMiwwLjEgICBjMC4zLDAuMSwwLjYsMC4yLDAuOSwwLjRjMC4xLDAsMC4yLDAuMSwwLjQsMC4xYzAuMywwLjEsMC42LDAuMiwwLjksMC4zYzAuMSwwLDAuMiwwLjEsMC4zLDAuMWMwLjMsMC4xLDAuNywwLjEsMSwwLjIgICBjMC4xLDAsMC4yLDAsMC4zLDBjMC40LDAsMC45LDAuMSwxLjMsMC4xYzAuNCwwLDAuOSwwLDEuMy0wLjFjMC4xLDAsMC4yLDAsMC4zLDBjMC4zLDAsMC43LTAuMSwxLTAuMmMwLjEsMCwwLjItMC4xLDAuMy0wLjEgICBjMC4zLTAuMSwwLjYtMC4yLDAuOS0wLjNjMC4xLDAsMC4yLTAuMSwwLjQtMC4xYzAuMy0wLjEsMC42LTAuMiwwLjktMC40YzAuMSwwLDAuMSwwLDAuMi0wLjFsMjA2LjMtMTAwYzQuMS0yLDYuOC02LjIsNi44LTEwLjggICBWMTEyQzQ1NC44LDExMS45LDQ1NC44LDExMS44LDQ1NC44LDExMS43eiBNMjM2LjUsMjUuM2wxNzguNCw4Ni41bC02NS43LDMxLjlMMTcwLjgsNTcuMkwyMzYuNSwyNS4zeiBNMjM2LjUsMTk4LjNMNTguMSwxMTEuOCAgIGw4NS4yLTQxLjNMMzIxLjcsMTU3TDIzNi41LDE5OC4zeiBNNDIuOCwxMzEuMWwxODEuNyw4OC4xdjIyMy4zTDQyLjgsMzU0LjRWMTMxLjF6IE0yNDguNSw0NDIuNVYyMTkuMmw4NS4zLTQxLjR2NTguNCAgIGMwLDYuNiw1LjQsMTIsMTIsMTJzMTItNS40LDEyLTEydi03MC4xbDczLTM1LjRWMzU0TDI0OC41LDQ0Mi41eiIgZmlsbD0iIzQ0NDQ0NCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></a>
    </div>
    <div class="compare-ico">
        <a href="<?php echo tm_woocompare_get_page_link(); ?>" target="_blank"><span>لیست مقایسه</span><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjI0cHgiIHZpZXdCb3g9IjAgLTI3IDQwMy4yNDA0MyA0MDMiIHdpZHRoPSIyNHB4Ij48cGF0aCBkPSJtMzI3Ljc4NTE1NiAxMzQuNTQyOTY5YzMuOTIxODc1IDMuODkwNjI1IDEwLjI1MzkwNiAzLjg2MzI4MSAxNC4xNDQ1MzItLjA1ODU5NGw1OC40MTAxNTYtNTguOTEwMTU2YzMuODc4OTA2LTMuOTEwMTU3IDMuODY3MTg3LTEwLjIxODc1LS4wMjczNDQtMTQuMTA5Mzc1bC01OC40MTQwNjItNTguNDE0MDYzYy0zLjkwNjI1LTMuOTA2MjUtMTAuMjM4MjgyLTMuOTA2MjUtMTQuMTQwNjI2IDAtMy45MDYyNSAzLjkwMjM0NC0zLjkwNjI1IDEwLjIzNDM3NSAwIDE0LjE0MDYyNWw0MS4zMzk4NDQgNDEuMzQzNzVoLTYwLjA2NjQwNmMtMjguMjA3MDMxLjA3MDMxMy01NC43Njk1MzEgMTMuMzAwNzgyLTcxLjgyNDIxOSAzNS43Njk1MzJsLTQ4LjQ4ODI4MSA2NC4yMjI2NTYtNDguNDg4MjgxLTY0LjIyMjY1NmMtMTcuMDU0Njg4LTIyLjQ2ODc1LTQzLjYxNzE4OC0zNS42OTkyMTktNzEuODI4MTI1LTM1Ljc2OTUzMmgtNTguNDAyMzQ0Yy01LjUyMzQzOCAwLTEwIDQuNDc2NTYzLTEwIDEwIDAgNS41MjM0MzggNC40NzY1NjIgMTAgMTAgMTBoNTguMzk4NDM4YzIxLjk0MTQwNi4wNTQ2ODggNDIuNjAxNTYyIDEwLjM0Mzc1IDU1Ljg2NzE4NyAyNy44MjAzMTNsNTEuOTIxODc1IDY4Ljc2NTYyNS01MS45MTc5NjkgNjguNzY1NjI1Yy0xMy4yNjU2MjUgMTcuNDc2NTYyLTMzLjkyNTc4MSAyNy43NjU2MjUtNTUuODY3MTg3IDI3LjgyMDMxMmgtNTguNDAyMzQ0Yy01LjUyMzQzOCAwLTEwIDQuNDc2NTYzLTEwIDEwIDAgNS41MjM0MzggNC40NzY1NjIgMTAgMTAgMTBoNTguMzk4NDM4YzI4LjIxMDkzNy0uMDcwMzEyIDU0Ljc3MzQzNy0xMy4zMDA3ODEgNzEuODI4MTI0LTM1Ljc2OTUzMWw0OC40OTIxODgtNjQuMjE4NzUgNDguNDg4MjgxIDY0LjIyMjY1NmMxNy4wNTQ2ODggMjIuNDY4NzUgNDMuNjE3MTg4IDM1LjY5OTIxOSA3MS44MjgxMjUgMzUuNzY5NTMyaDYwLjA2NjQwNmwtNDEuMzQ3NjU2IDQxLjMzOTg0M2MtMi41NDI5NjggMi41MjM0MzgtMy41NDI5NjggNi4yMTQ4NDQtMi42MjEwOTQgOS42NzU3ODEuOTIxODc2IDMuNDYwOTM4IDMuNjI1IDYuMTY3OTY5IDcuMDg5ODQ0IDcuMDg5ODQ0IDMuNDYwOTM4LjkyMTg3NSA3LjE1MjM0NC0uMDc4MTI1IDkuNjc1NzgyLTIuNjI1bDU4LjQxMDE1Ni01OC40MTQwNjJjMy44OTQ1MzEtMy44OTQ1MzIgMy45MDYyNS0xMC4xOTkyMTkuMDMxMjUtMTQuMTA5Mzc1bC01OC40MTQwNjMtNTguOTEwMTU3Yy0yLjUwMzkwNi0yLjU4NTkzNy02LjIwNzAzMS0zLjYyODkwNi05LjY5MTQwNi0yLjcyMjY1Ni0zLjQ4ODI4MS45MDIzNDQtNi4yMTg3NSAzLjYwOTM3NS03LjE1MjM0NCA3LjA4OTg0NC0uOTMzNTkzIDMuNDc2NTYyLjA3ODEyNSA3LjE4NzUgMi42NDQ1MzEgOS43MTQ4NDRsNDEuNTE1NjI2IDQxLjg2NzE4N2gtNjAuMjEwOTM4Yy0yMS45NDE0MDYtLjA1NDY4Ny00Mi42MDE1NjItMTAuMzQzNzUtNTUuODY3MTg4LTI3LjgyMDMxMmwtNTEuOTE3OTY4LTY4Ljc2NTYyNSA1MS45MTc5NjgtNjguNzY1NjI1YzEzLjI2NTYyNi0xNy40NzY1NjMgMzMuOTI1NzgyLTI3Ljc2NTYyNSA1NS44NjcxODgtMjcuODIwMzEzaDYwLjIwNzAzMWwtNDEuNTExNzE5IDQxLjg2NzE4OGMtMy44OTA2MjQgMy45MjE4NzUtMy44NjMyODEgMTAuMjUzOTA2LjA1ODU5NCAxNC4xNDA2MjV6bTAgMCIgZmlsbD0iIzQ0NDQ0NCIvPjwvc3ZnPgo=" /></a>
    </div>
        <?php
		$zanbil_page_offers = zanbil_options()->getCpanelValue('hot_offers');
		if ($zanbil_page_offers != ''  && get_page( $zanbil_page_offers ) != NULL ):	?>
		<div class="hotoffers-ico"><a href="<?php echo get_page_link( $zanbil_page_offers ); ?>"><span>شگفت انگیز ها</span><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI0Ni45ODkgMjQ2Ljk4OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjQ2Ljk4OSAyNDYuOTg5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxwYXRoIGQ9Ik0yNDYuMDM4LDgzLjk1NWwtMzkuNDI0LTcwLjY2NGMtMS4zMjUtMi4zNzQtMy44MzEtMy44NDYtNi41NS0zLjg0Nkg0Ni45M2MtMi43MTksMC01LjIyNSwxLjQ3MS02LjU1LDMuODQ2TDAuOTUxLDgzLjk1NSAgYy0xLjQ5NywyLjY4My0xLjIwNiw2LjAwOCwwLjczNCw4LjM5MWwxMTYuMDAyLDE0Mi40MzJjMC4wMzcsMC4wNDYsMC4wOCwwLjA4NSwwLjExOCwwLjEzYzAuMTIsMC4xNDEsMC4yNDQsMC4yNzgsMC4zNzUsMC40MSAgYzAuMDE1LDAuMDE1LDAuMDI4LDAuMDMzLDAuMDQzLDAuMDQ4YzAuMDM0LDAuMDMzLDAuMDY5LDAuMDY0LDAuMTA0LDAuMDk2YzAuMDEyLDAuMDEyLDAuMDI1LDAuMDIxLDAuMDM3LDAuMDMzICBjMC4xMzMsMC4xMjUsMC4yNywwLjI0NSwwLjQxMiwwLjM2MWMwLjA2NSwwLjA1MywwLjEzMSwwLjEwNiwwLjE5OCwwLjE1N2MwLjE0NSwwLjExLDAuMjk1LDAuMjEzLDAuNDQ4LDAuMzEzICBjMC4wNzIsMC4wNDcsMC4xNDMsMC4wOTQsMC4yMTYsMC4xMzljMC4xMjksMC4wNzcsMC4yNjMsMC4xNDgsMC4zOTcsMC4yMTljMC4wNTUsMC4wMjgsMC4xMDgsMC4wNTksMC4xNjQsMC4wODYgIGMwLjA1MSwwLjAyNSwwLjEwMSwwLjA1LDAuMTUyLDAuMDc0YzAuMTQ5LDAuMDY5LDAuMzAzLDAuMTI4LDAuNDU5LDAuMTg4YzAuMDk3LDAuMDM4LDAuMTkyLDAuMDc5LDAuMjkxLDAuMTEzICBjMC4wMTksMC4wMDYsMC4wMzUsMC4wMTUsMC4wNTQsMC4wMjFjMC4wMDcsMC4wMDIsMC4wMTQsMC4wMDMsMC4wMjEsMC4wMDVjMC4wNjYsMC4wMjIsMC4xMzcsMC4wMzQsMC4yMDUsMC4wNTQgIGMwLjI1MywwLjA3NSwwLjUxLDAuMTM2LDAuNzcsMC4xODRjMC4xMDgsMC4wMiwwLjIxNSwwLjA0LDAuMzI0LDAuMDU1YzAuMzA5LDAuMDQzLDAuNjIyLDAuMDcsMC45MzgsMC4wNzQgIGMwLjAyOSwwLDAuMDU4LDAuMDA3LDAuMDg4LDAuMDA3aDAuMDAxaDAuMDAxYzAuMDMsMCwwLjA1OS0wLjAwNywwLjA4OC0wLjAwN2MwLjMxNy0wLjAwNCwwLjYzLTAuMDMxLDAuOTM5LTAuMDc0ICBjMC4xMDgtMC4wMTUsMC4yMTQtMC4wMzUsMC4zMjEtMC4wNTRjMC4yNjMtMC4wNDgsMC41MjItMC4xMSwwLjc3Ni0wLjE4NmMwLjA2NS0wLjAxOSwwLjEzMy0wLjAzMSwwLjE5OC0wLjA1MiAgYzAuMDA4LTAuMDAzLDAuMDE2LTAuMDAzLDAuMDIzLTAuMDA2YzAuMDItMC4wMDYsMC4wMzYtMC4wMTUsMC4wNTUtMC4wMjJjMC4wOTgtMC4wMzMsMC4xOTEtMC4wNzQsMC4yODctMC4xMSAgYzAuMTU2LTAuMDYsMC4zMTItMC4xMiwwLjQ2Mi0wLjE4OWMwLjA1Mi0wLjAyNCwwLjEwNC0wLjA1LDAuMTU1LTAuMDc1YzAuMDUzLTAuMDI2LDAuMTA0LTAuMDU2LDAuMTU1LTAuMDgyICBjMC4xMzYtMC4wNzEsMC4yNzEtMC4xNDMsMC40MDEtMC4yMjFjMC4wNzQtMC4wNDUsMC4xNDYtMC4wOTMsMC4yMi0wLjE0MWMwLjE1Mi0wLjA5OSwwLjMwMi0wLjIwMiwwLjQ0NC0wLjMxMSAgYzAuMDY4LTAuMDUxLDAuMTM0LTAuMTA0LDAuMTk5LTAuMTU4YzAuMTQ0LTAuMTE2LDAuMjgxLTAuMjM3LDAuNDE0LTAuMzYyYzAuMDEzLTAuMDEzLDAuMDI3LTAuMDIzLDAuMDQtMC4wMzUgIGMwLjAzLTAuMDI5LDAuMDYyLTAuMDU2LDAuMDkyLTAuMDg2YzAuMDE3LTAuMDE3LDAuMDMyLTAuMDM2LDAuMDQ5LTAuMDUzYzAuMTM0LTAuMTM1LDAuMjYxLTAuMjc2LDAuMzgzLTAuNDIgIGMwLjAzNi0wLjA0MiwwLjA3Ni0wLjA3OSwwLjExMS0wLjEyMkwyNDUuMzA0LDkyLjM0NkMyNDcuMjQ0LDg5Ljk2MywyNDcuNTM1LDg2LjYzOCwyNDYuMDM4LDgzLjk1NXogTTEzOC4zLDI0LjQ0NmwyMS4yNDIsNTUuNjY0ICBIODcuNDU3bDIxLjI0OS01NS42NjRIMTM4LjN6IE0xNjAuMDY1LDk1LjExbC0zNi41NjMsMTEwLjk2N0w4Ni45MzUsOTUuMTFIMTYwLjA2NXogTTcxLjE0Miw5NS4xMWwzMi41MjQsOTguNjk5TDIzLjI4Miw5NS4xMSAgSDcxLjE0MnogTTE3NS44NTgsOTUuMTFoNDcuODUxbC04MC4zNyw5OC42OTZMMTc1Ljg1OCw5NS4xMXogTTIyNi43MTUsODAuMTFoLTUxLjExOGwtMjEuMjQyLTU1LjY2NGg0MS4zMDZMMjI2LjcxNSw4MC4xMXogICBNNTEuMzMzLDI0LjQ0Nmg0MS4zMTdMNzEuNDAyLDgwLjExSDIwLjI3NEw1MS4zMzMsMjQuNDQ2eiIgZmlsbD0iIzQ0NDQ0NCIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></a></div>
		<?php endif ?>
</div>
<div id="notif-compare" ></div>
<script>jQuery(document).ready(function($) {
        $('.textwidget a').attr('rel','noopener origin');
    })</script>
<?php wp_footer(); ?>
</body>
</html>