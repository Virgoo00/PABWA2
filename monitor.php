<?php
$koin = explode(",", $_GET['coin']);
$num = count($koin);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" class="sid-plesk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: #000;
            color: #fff;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }
        .widget {
            width: 32%;
            margin: 1%;
            height: 300px;
            background-color: #1a1a1a;
            border-radius: 8px;
            overflow: hidden;
        }
        .full-width {
            width: 100%;
            margin-top: 10px;
        }
        .ticker {
            width: 100%;
            height: 50px;
            margin-top: 10px;
        }
        @media (max-width: 768px) {
            .widget {
                width: 48%;
            }
        }
        @media (max-width: 480px) {
            .widget {
                width: 100%;
            }
        }
    </style>
    <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "80%";
        }
    </script>
</head>
<body onload="zoom()">

<div class="container">
    <?php for ($i = 0; $i < $num; $i++): ?>
        <div class="widget">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget" style="height: 100%; width: 100%;"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                {
                    "autosize": true,
                    "symbol": "BINANCE:<?php echo $koin[$i] . 'USDT'; ?>",
                    "interval": "D",
                    "timezone": "Asia/Jakarta",
                    "theme": "dark",
                    "style": "1",
                    "locale": "id",
                    "enable_publishing": false,
                    "allow_symbol_change": true,
                    "studies": [
                        "STD;RSI",
                        "STD;Stochastic_RSI"
                    ],
                    "container_id": "tradingview_<?php echo $i; ?>"
                }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    <?php endfor; ?>

    <div class="full-width">
        <div class="widget">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget" style="height: 100%; width: 100%;"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                {
                    "interval": "1h",
                    "width": "100%",
                    "isTransparent": true,
                    "height": "100%",
                    "symbol": "BINANCE:<?php echo $koin[0] . 'USDT'; ?>",
                    "showIntervalTabs": true,
                    "displayMode": "single",
                    "locale": "id",
                    "colorTheme": "dark"
                }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>

    <div class="ticker">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                <?php
                    $i = 0;
                    foreach ($koin as $coin) {
                        $i++;
                        echo '{"description": "", "proName": "' . $coin . 'USDT"}';
                        if ($i != $num) echo ',';
                    }
                ?>
                ],
                "showSymbolLogo": true,
                "isTransparent": false,
                "displayMode": "adaptive",
                "colorTheme": "dark",
                "locale": "id"
            }
            </script>
        </div>

		<div id="div30" >
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
			  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
			  {
			  "autosize": true,
			  "symbol": "BINANCE:<?php echo $koin[2]."USDT"; ?>",
			  "interval": "D",
			  "timezone": "Asia/Jakarta",
			  "theme": "dark",
			  "style": "1",
			  "locale": "id",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "studies": [
				"STD;RSI",
				"STD;Stochastic_RSI"
			  ],
			  "support_host": "https://www.tradingview.com"
			}
			  </script>
			</div>
			<!-- TradingView Widget END -->
		</div>
        <!-- TradingView Widget END -->
    </div>
</div>

</body>
</html>
