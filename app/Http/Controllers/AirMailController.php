<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirMailController extends Controller
{
    /**
     * Display Airmail Home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('airmail.index');
    }
    /**
     * Display Package Management.
     *
     * @return \Illuminate\Http\Response
     */
    public function packages(Request $request)
    {
        return view('airmail.package');
    }
    /**
     * Display Incoming Packages.
     *
     * @return \Illuminate\Http\Response
     */
    public function inPackages(Request $request)
    {
        $stores = ["Alibaba.com", "AliExpress AliExpress", "Amazon Amazon", "AMICLUBWEAR AMICLUBWEAR.COM", "APPLE APPLE.COM", "Ashley Stewart", "Bananarepublic.com", "Barnesandnobles.com", "Bath & Body Works Bath & Body Works Direct, Inc", "BLU", "Brandsmart.com", "Carters.com", "Chic & Curvy", "childrensplace.com", "Dsw.com", "EBAY EBAY.COM", "Etsy", "EXPOSE YOURSELF", "Fashionova.com", "Fedex", "Finishline.com", "Footlocker.com", "Forever21.com", "GNC GNC.COM", "Gnc.com", "Goggles4u.com", "Groupon", "Gucci.com", "Gymboree", "HP HP.COM", "Jcpenney.com", "Kennethcole.com", "KIPLING KIPLING.COM", "Kohls.com", "Latam Games", "Levis.com", "Ninewest.com", "OFFICE DEPOT OFFICEDEPOT.COM", "Oldnavy.com", "Other Store", "Partycity.com", "Ralphlauren.com", "Roc Auto rockauto.com", "Sears.com", "Shoes.com", "Some new store", "Target.com", "The Real Real therealreal.com", "THE VITAMIN SHOPPE", "Toysrus.com", "UHS Hardware", "UNICITY unicity.com", "UPS", "USPS", "Vencol Services", "Victoria's Secret", "Vitatree.com", "Walmart.com", "Wetseal.com", "Zappos.com", "Zulily.com"];
        $commodities = ["Alibaba.com", "AliExpress AliExpress", "Amazon Amazon", "AMICLUBWEAR AMICLUBWEAR.COM", "APPLE APPLE.COM", "Ashley Stewart", "Bananarepublic.com", "Barnesandnobles.com", "Bath & Body Works Bath & Body Works Direct, Inc", "BLU", "Brandsmart.com", "Carters.com", "Chic & Curvy", "childrensplace.com", "Dsw.com", "EBAY EBAY.COM", "Etsy", "EXPOSE YOURSELF", "Fashionova.com", "Fedex", "Finishline.com", "Footlocker.com", "Forever21.com", "GNC GNC.COM", "Gnc.com", "Goggles4u.com", "Groupon", "Gucci.com", "Gymboree", "HP HP.COM", "Jcpenney.com", "Kennethcole.com", "KIPLING KIPLING.COM", "Kohls.com", "Latam Games", "Levis.com", "Ninewest.com", "OFFICE DEPOT OFFICEDEPOT.COM", "Oldnavy.com", "Other Store", "Partycity.com", "Ralphlauren.com", "Roc Auto rockauto.com", "Sears.com", "Shoes.com", "Some new store", "Target.com", "The Real Real therealreal.com", "THE VITAMIN SHOPPE", "Toysrus.com", "UHS Hardware", "UNICITY unicity.com", "UPS", "USPS", "Vencol Services", "Victoria's Secret", "Vitatree.com", "Walmart.com", "Wetseal.com", "Zappos.com", "Zulily.com"];

        return view('airmail.inPackages',compact('stores','commodities'));
    }
}
