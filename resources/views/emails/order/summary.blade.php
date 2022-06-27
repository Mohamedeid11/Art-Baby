<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Automatic Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="telephone=no" name="format-detection">
    <meta content=
          "width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;"
          name="viewport">
    <style>
        .main-table td, .main-table th {
            text-align: center;
            padding: 5px;
            border-top: 1px solid #333;
            margin: 0 -1px;
        }

        .main-table tr {
            border: 1px solid #333;
        }
    </style>
</head>
<body style="margin:0; padding:10px 0 0 0;" bgcolor="#FFFFFF">
<table align="center" cellpadding="0" cellspacing="0" width="95%%" style="padding:15px;">
    <tr>
        <td align="center">
            <table align="center" border="1" cellpadding="0" cellspacing="0" width="600px" style="margin:15px;padding:15px;border-collapse: separate; border-spacing: 5px 5px; #000;" bgcolor="#FFFFFF">
                <tr>
                    <td align="center" style="padding:5px;">
                        <a href="http://artbabybh.com" target="_blank">
                            <img src="http://artbabybh.com/website/logo.png" style="display: block;" alt="Logo" style="width:186px;border:0;"/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding:30px 0;">
                        <table class="main-table">






                            <tr>
                                <th colspan="15">Order No. {{ $order['id'] }} Details</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th colspan="3">Category</th>
                                <th colspan="2">Product</th>
                                <th colspan="2">Quantity</th>
                                <th colspan="2">Color</th>
                                <th colspan="2">Size</th>
                                <th colspan="2">Price</th>
                                <th colspan="2">Total</th>
                            </tr>
                            @foreach($order->orderProducts as $key => $orderProduct)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td colspan="3">{{ $orderProduct->product->category['name_en'] }}</td>
                                    <td colspan="2">{{ $orderProduct->product['name_en'] }}</td>
                                    <td colspan="2">{{ $orderProduct['quantity'] }}</td>
                                    <td colspan="2">{{ getColor($orderProduct['color_id'])['name_' . app()->getLocale()] ?? '' }}</td>
                                    <td colspan="2">{{ getSize($orderProduct['size_id'])['name_' . app()->getLocale()] ?? ''  }}</td>
                                    <td colspan="2">{{ number_format($orderProduct['price'] * currencyValue() , 3) }} BHD</td>
                                    <td colspan="2">{{ number_format($orderProduct['total'] * currencyValue() , 3) }} BHD</td>
                                </tr>
                            @endforeach








                            <tr>
                                <th colspan="15">Client Info</th>
                            </tr>
                            <tr>
                                <th colspan="3">Name</th>
                                <th colspan="3">Phone</th>
                                <th colspan="2">Region</th>
                                <th colspan="2">Block</th>
                                <th colspan="1">Road</th>
                                <th colspan="1">Building</th>
                                <th colspan="1">Flat No</th>
                            </tr>
                            <tr>
                                <td colspan="3">{{ $order->client['first_name'] . ' ' . $order->client['last_name'] }}</td>
                                <td colspan="3">{{ $order->address['phone'] }}</td>

                                <td colspan="2">{{ $order->address['region_id'] }}</td>
                                <td colspan="2">{{ $order->address['block'] }}</td>
                                <td colspan="1">{{ $order->address['road'] }}</td>
                                <td colspan="1">{{ $order->address['floor_no'] }}</td>
                                <td colspan="1">{{ $order->address['apartment'] }}</td>
                            </tr>


                            <tr>
                                <th colspan="15">Order Info</th>
                            </tr>
                            <tr>
                                <th colspan="3">Payment Method</th>
                                <th colspan="3">Sub Total</th>
                                <th colspan="1">VAT</th>
                                <th colspan="1">Coupon</th>
                                <th colspan="1">Discount</th>
                                <th colspan="2">Delivery Charge</th>
                                <th colspan="2">Net Total</th>
                            </tr>
                            <tr>
                                <td colspan="3">{{ $order->payment['name_en'] }}</td>
                                <td colspan="3">{{ number_format( $order['sub_total'], 3)  }} BHD</td>
                                <td colspan="1">{{ number_format( $order['vat'], 3)  }} BHD</td>
                                <td colspan="1">{{ number_format( $order['coupon'], 3)  }} BHD</td>
                                <td colspan="1">{{ number_format( $order['discount'], 3)  }} BHD</td>
                                <td colspan="2">{{ number_format( $order['delivery_charge'], 3)  }} BHD</td>
                                <td colspan="2">{{ number_format( $order['net_total'], 3)  }} BHD</td>
                            </tr>


                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF">
                        <table cellpadding="0" cellspacing="0" width="100%" style="padding:10px;">
                            <tr>
                                <td width="260" valign="top" style="padding: 0 0 15px 0;">
                                    <table cellpadding="0" cellspacing="0" width="100%%">
                                        <tr>
                                            <td align="center">
                                                <a href="tel:{{ setting('phone') }}" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/phone-icon.jpeg" alt="اتصل بنا"
                                                         style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: tahoma; font-weight:bold; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                اتصل بنا
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">
                                    &nbsp;
                                </td>
                                <td width="260" valign="top">
                                    <table cellpadding="0" cellspacing="0" width="100%%" >
                                        <tr>
                                            <td align="center">
                                                <a href="mailto:{{ setting('email') }}">
                                                    <img src="http://comm.emcan-group.com/uploads/email-icon.jpeg" alt="Email us"
                                                         style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: tahoma; font-weight:bold; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                راسنا على البريد الإلكتروني
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF" style="padding: 15px 15px 15px 15px;">
                        <table cellpadding="0" cellspacing="0" width="100%%">
                            <tr>
                                <td align="center">
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <a href="https://www.facebook.com/Emcansolutions?_rdc=1&_rdr" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/facebook-icon.jpeg" alt="Facebook" width="50" height="50" style="display: block;"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <td>
                                                <a href="https://www.instagram.com/emcansolutions" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/instagram-icon.jpeg" alt="Instagram" width="50" height="50"style="display: block;"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <td>
                                                <a href="https://twitter.com/emcansolutions" target="_blank">
                                                    <img src="http://comm.emcan-group.com/uploads/twitter-icon.jpeg" alt="Twitter" width="50" height="50"style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
