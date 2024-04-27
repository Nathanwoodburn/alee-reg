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
					<p>
					Introducing ".g/" - the groundbreaking TLD that redefines digital identity on the Handshake blockchain. Designed for the modern internet pioneer, ".g/" empowers creators, developers, and innovators with a domain that embodies innovation and creativity.

With ".g/", your online presence transcends traditional boundaries, signaling a commitment to cutting-edge technology and forward-thinking concepts. Whether you're a tech startup, a digital artist, or an enthusiast pushing the boundaries of what's possible online, ".g/" provides a unique platform to showcase your vision to the world.

Embrace the future of decentralized web naming with ".g/" - where every domain is a symbol of ingenuity and progress. Join the movement and secure your place in the digital frontier with ".g/".
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