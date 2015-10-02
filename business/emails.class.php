<?php
/**
 * Created by PhpStorm.
 * User: darsal
 * Date: 9/28/15
 * Time: 4:13 PM
 */

class emails{
    private function __construct(){

    }

    public static function send( $registration = [] ){
        $name = $registration[ 'first' ];
        $email = $registration[ 'email' ];
        $subject = 'Walk For Our Water Registration';


        $headers = 'From: Walk For Our Water < info@walkforourwater.org >' . "\r\n" .
            "To: $name < $email >"."\r\n" .
            'Reply-To: info@walkforourwater.org' . "\r\n" .
            'X-Mailer: PHP/' . phpversion()."\r\n".
            'MIME-Version: 1.0'."\r\n".
            'Content-type: text/html; charset=iso-8859-1' ."\r\n";

        $registration[ 'startTime' ] = '10am';

        $message = emailMessages::newRegistration( $registration );

        $emailLayout = emailTemplates::header().emailTemplates::body( $message ).emailTemplates::footer();

        if( mail( $email, $subject, $emailLayout, $headers ) ){
            registrationsEmailsTable::newSent( $registration );
            return true;
        }

        return false;
    }

    public static function sendUpdate( $registration = [] ){
        $name = $registration[ 'first' ];
        $email = $registration[ 'email' ];
        $subject = 'Rain or shine we will see you tomorrow at the Walk';


        $headers = 'From: Walk For Our Water < info@walkforourwater.org >' . "\r\n" .
            "To: $name < $email >"."\r\n" .
            'Reply-To: info@walkforourwater.org' . "\r\n" .
            'X-Mailer: PHP/' . phpversion()."\r\n".
            'MIME-Version: 1.0'."\r\n".
            'Content-type: text/html; charset=iso-8859-1' ."\r\n";

        $registration[ 'startTime' ] = '10am';

        $message = emailMessages::updateRegistration( $registration );

        $emailLayout = emailTemplates::header().emailTemplates::body( $message ).emailTemplates::footer();

        if( !mail( $email, $subject, $emailLayout, $headers ) ) {
            return false;
        }

        registrationsEmailsTable::updateSent( $registration );
        return true;
   }

}