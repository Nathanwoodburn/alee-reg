<?php
	if (@$page !== "tld") {
		include "../etc/includes.php";
	}

	$title = "Domains";
	$otherTitle = "Available TLDs";
	if (@$tldInfo) {
		$title = "Buy .".decodePuny($tldInfo["tld"])." domains";
		$otherTitle = "Other TLDs";
	}
?>
<?php
	if (@$page == "tld") { ?>
		<div class="section">
			<div class="title">About</div>

			<div class="box">
				<div class='tldInfo'>
					<p>G's think for themself. G's don't sell out. G's can't be psyoped. G's are not perfect [1]. G's are not idols. G's believe in God.<br><br>	
G's from the past (feel free to suggest more)<br>1. Jesus Christ<br>2. Seneca<br>3. Musashi Miyamoto<br>4. King Sejong<br>5. Ghenghis Khan<br><br>
Modern day G's<br>1. Satoshi Nakamoto<br>2. Donald J Trump<br>3. Kanye West<br>4. Andrew Tate<br>5. You?<br><br>
[1] Except Jesus Christ<br>
[2] Freemasons also identify with G for some reason. Fuck freemasons, G/ has nothing to do with them.
	</p>
				
			</div>
		</div>
	<?php
	}
?>

<div class="section" data-section="search">
	<div class="title"><?php echo $title; ?></div>
	<div class="box">
		<table id="searchDomainsTable" data-tld="<?php echo @$tldInfo["tld"]; ?>">
			<tbody>
				<tr>
					<td class="sld editing"><div class="edit" contenteditable="true"></div></td>
					<td class="add"><div class="actions"><div class="icon search" data-action="searchDomains"></div></div></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="section shown" data-section="slds">
	<div class="titleHolder">
		<div class="title">Reserved Domains</div>
		<?php
			if ($GLOBALS["stripeEnabeld"]) { ?>
				<div class="titleAction flex shown">HNS: <label class="cl-switch custom"><input type="checkbox" class="hnsPricing"><span class="switcher"></span></label></div>
			<?php
			}
		?>
	</div>
	<div class="box">
		<div id="reserveddomainTable" class="table">
		<div class="row" data-domain="top.g">
			<div class="items">
				<div>top.g<div class="status unavailable">Reserved for Andrew Tate</div></div>
					<div class="actions">
						<p style="color:white;">Tweet @gdomains to claim</p>
					</div>
				</div>
			</div>
		</div>
		<div id="domainTable" class="table"></div>

	</div>
</div>