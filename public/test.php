<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Automatic Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="telephone=no" name="format-detection">
    <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
    <style>
        .main-table td,
        .main-table th {
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
                <table align="center" border="1" cellpadding="0" cellspacing="0" width="600px"
                    style="margin:15px;padding:15px;border-collapse: separate; border-spacing: 5px 5px; #000;"
                    bgcolor="#FFFFFF">
                    <tr>
                        <td align="center" style="padding:5px;">
                            <a href="http://lilyorganics-bh.com" target="_blank">
                                <img src="uploads/logo.png" alt="Logo" style="width:186px;border:0;" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding:30px 0;">
                            <table class="main-table">
                                <tr>
                                    <th colspan="12">Order No. {{ $order['id'] }} Details</th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th colspan="3">@lang('dashboard.category')</th>
                                    <th colspan="2">@lang('dashboard.product')</th>
                                    <th colspan="2">@lang('dashboard.quantity')</th>
                                    <th colspan="2">@lang('dashboard.price')</th>
                                    <th colspan="2">@lang('dashboard.total')</th>
                                </tr>
                                @foreach ($order->orderProducts as $key => $orderProduct)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td colspan="3">{{ $orderProduct->product->category['name_en'] }}</td>
                                        <td colspan="2">{{ $orderProduct->product['name_en'] }}</td>
                                        <td colspan="2">{{ $orderProduct['quantity'] }}</td>
                                        <td colspan="2">{{ $orderProduct['price'] }} BHD</td>
                                        <td colspan="2">{{ $orderProduct['total'] }} BHD</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th colspan="9">Client Info</th>
                                </tr>
                                <tr>
                                    <th>@lang('website.name')</th>
                                    <th>@lang('website.phone')</th>
                                    <th>@lang('website.country')</th>
                                    <th>@lang('website.region')</th>
                                    <th>@lang('website.block')</th>
                                    <th>@lang('website.road')</th>
                                    <th>@lang('dashboard.p_building')</th>
                                    <th>@lang('website.flat')</th>
                                    <th>@lang('website.type')</th>
                                    <th>@lang('dashboard.additional_directions')</th>
                                </tr>
                                <tr>
                                    <td>{{ $order->client['first_name'] . ' ' . $order->client['last_name'] }}</td>
                                    <td>{{ $order->address['phone'] }}</td>
                                    @if (auth('client')->user()->country_id == 1)
                                        <td>Bahrain</td>
                                    @else
                                        <td>{{ getUsercountry() }}</td>
                                    @endif
                                    <td>{{ $order->address->region['name_en'] ?? $order->address->city }}</td>
                                    <td>{{ $order->address['block'] }}</td>
                                    <td>{{ $order->address['road'] }}</td>
                                    <td>{{ $order->address['floor_no'] }}</td>
                                    <td>{{ $order->address['apartment'] }}</td>
                                    <td>{{ $order->address['type'] }}</td>
                                    <td>{{ $order->address['additional_directions'] }}</td>
                                </tr>
                                <tr>
                                    <th colspan="9">Order Info</th>
                                </tr>
                                <tr>
                                    <th>@lang('dashboard.paymentMethod')</th>
                                    <th colspan="2">@lang('website.subTotal')</th>
                                    <th>@lang('website.VAT')</th>
                                    <th>@lang('website.discount')</th>
                                    <th colspan="2">@lang('website.deliveryCost')</th>
                                    <th colspan="2">@lang('website.netTotal')</th>
                                </tr>
                                <tr>
                                    <td>{{ $order->payment['name_en'] }}</td>
                                    <td colspan="2">{{ $order['sub_total'] }} BHD</td>
                                    <td>{{ $order['vat'] }} BHD</td>
                                    <td>{{ $order['discount'] }} BHD</td>
                                    <td colspan="2">{{ $order['delivery_charge'] }} BHD</td>
                                    <td colspan="2">{{ $order['net_total'] }} BHD</td>
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
                                                        <img src="http://comm.emcan-group.com/uploads/phone-icon.jpeg"
                                                            alt="اتصل بنا" style="display: block;" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"
                                                    style="font-family: tahoma; font-weight:bold; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                    @lang('website.contact')
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="font-size: 0; line-height: 0;" width="20">
                                        &nbsp;
                                    </td>
                                    <td width="260" valign="top">
                                        <table cellpadding="0" cellspacing="0" width="100%%">
                                            <tr>
                                                <td align="center">
                                                    <a href="mailto:{{ setting('email') }}">
                                                        <img src="http://comm.emcan-group.com/uploads/email-icon.jpeg"
                                                            alt="Email us" style="display: block;" />
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"
                                                    style="font-family: tahoma; font-weight:bold; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                    @lang('website.followUs')
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
                                                    <a href="#" target="_blank">
                                                        <img src="http://comm.emcan-group.com/uploads/facebook-icon.jpeg"
                                                            alt="Facebook" width="50" height="50"
                                                            style="display: block;" />
                                                    </a>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td>
                                                    <a href="#" target="_blank">
                                                        <img src="http://comm.emcan-group.com/uploads/instagram-icon.jpeg"
                                                            alt="Instagram" width="50" height="50"
                                                            style="display: block;" />
                                                    </a>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td>
                                                    <a href="#" target="_blank">
                                                        <img src="http://comm.emcan-group.com/uploads/twitter-icon.jpeg"
                                                            alt="Twitter" width="50" height="50"
                                                            style="display: block;" />
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
