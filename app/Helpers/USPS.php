<?php
namespace App\Helpers;

class USPS
{
    public static function validateAddress($address, $city, $state, $zipcode){
        $api_address = "Verify";
        $user = config('services.usps.user_id');
        $usps_api = config('services.usps.usps_api');
        if(strlen(trim($zipcode)) == 4){
            $request_address = <<<EOT
            <?xml version="1.0"?>
            <AddressValidateRequest USERID="$user">
            	<Revision>1</Revision>
            	<Address ID="0">
            		<Address1>$address</Address1>
            		<Address2/>
            		<City>$city</City>
            		<State>$state</State>
            		<Zip5/>
            		<Zip4>$zipcode</Zip4>
            	</Address>
            </AddressValidateRequest>
            EOT;
        }else{
            $request_address = <<<EOT
            <?xml version="1.0"?>
            <AddressValidateRequest USERID="$user">
            	<Revision>1</Revision>
            	<Address ID="0">
            		<Address1>$address</Address1>
            		<Address2/>
            		<City>$city</City>
            		<State>$state</State>
            		<Zip5>$zipcode</Zip5>
            		<Zip4/>
            	</Address>
            </AddressValidateRequest>
            EOT;
        }
        
        $params = preg_replace('/[\t\n]/', '', $request_address);
        $params = urlencode($params);
        
        $r = simplexml_load_file("{$usps_api}?API={$api_address}&XML={$params}");
//         dd($r->Address->Error->Description->__toString());
        if($r->Address->Error)
            return false;
            
            return $r;
    }
   
    public static function validateZipCode(string $zipcode)
    {
        $api_city = "CityStateLookup";
        $user = config('services.usps.user_id');
        $usps_api = config('services.usps.usps_api');
        if(strlen(trim($zipcode)) == 4){
            $request_city = <<<EOT
            <?xml version="1.0"?>
            <CityStateLookupRequest USERID="$user">
            	<ZipCode ID='0'>
                    <Zip4>$zipcode</Zip4>
                </ZipCode>
            </CityStateLookupRequest>
            EOT;
        }else{
            $request_city = <<<EOT
            <?xml version="1.0"?>
            <CityStateLookupRequest USERID="$user">
            	<ZipCode ID='0'>
                    <Zip5>$zipcode</Zip5>
                </ZipCode>
            </CityStateLookupRequest>
            EOT;
        }
          
        $params = preg_replace('/[\t\n]/', '', $request_city);
        $params = urlencode($params);
        
        $r = simplexml_load_file("{$usps_api}?API={$api_city}&XML={$params}");

//         dd($r->ZipCode->Error->Description->__toString());
        if($r->ZipCode->Error)
            return false;
        
        return true;
    }
}