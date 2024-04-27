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
				<div class="price HNS" data-price="10.00">1,000</div>
				<div class="buy button" data-action="buyDomain" title="Available">Buy</div>
			</div>
			</div>
		</div>
	<div class="row" data-domain="bottom.g">
			<div class="items">
				<div>bottom.g<div class="status unavailable">Reserved for</div></div>
				<div class="actions">
					<div class="price HNS" data-price="10.00">1,000</div>
					<div class="buy button" data-action="buyDomain" title="Available">Buy</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="section" data-section="tlds">
	<div class="title"><?php echo $otherTitle; ?></div>
	<div class="box">
		<div class="list">
			<?php
				foreach ($stakedDomains as $key => $domain) { ?>
					<div class="submit auto" data-action="shopTLD" data-tld="<?php echo $domain["tld"]; ?>">.<?php echo $domain["tld"]; ?></div>
				<?php
				}
			?>
		</div>
	</div>
</div>