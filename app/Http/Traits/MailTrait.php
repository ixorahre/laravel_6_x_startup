<?php


namespace App\Http\Traits;


use App\Mail\SendEmailChangeConfirmation;
use App\Mail\SendMemberRegConfirmation;
use App\Mail\SendMemberDeleteConfirmation;
use App\Mail\SendPasswordReissuConfirmation;
use Mail;

/***
 * All email related methods
*/
trait MailTrait
{
    /**
     * @author Habibur Rahman
     * @param $email
     * @param $subject
     * @param $body
     * @param $user
     * @param $token
     * @param $passForLogin
     * @return void
    */
    public function sendMemberRegConfirmation(string $email, string $subject, string $body, string $user,string $token, string $passForLogin)
    {

        $sendMemberConfirmationMail = new SendMemberRegConfirmation($subject, $body, $user, $token, $passForLogin);

        Mail::to($email)->send($sendMemberConfirmationMail);
    }

    /**
     * @author Habibur Rahman
     * @param $email
     * @param $subject
     * @param $body
     * @param $user
     * @param $token
     * @return void
    */
    public function sendMemberEmailChangeConfirmation(string $email, string $subject, string $body, string $user,string $token)
    {
        $sendMemberConfirmationMail = new SendEmailChangeConfirmation($subject, $body, $user, $token);

        Mail::to($email)->send($sendMemberConfirmationMail);
    }

    /**
     * @author Habibur Rahman
     * @param $email
     * @param $subject
     * @param $body
     * @return void
    */
    public function sendMemberAccountDeleteConfirmation(string $email, string $subject, string $body)
    {
        $sendMemberConfirmationMail = new SendMemberDeleteConfirmation($subject, $body);

        Mail::to($email)->send($sendMemberConfirmationMail);
    }


    /**
     * @author Habibur Rahman
     * @param $email
     * @param $subject
     * @param $body
     * @param $token
     * @return void
    */
    public function sendPasswordResetConfirmation(string $email, string $subject, string $body, string $user,string $token)
    {
        $sendMemberConfirmationMail = new SendPasswordReissuConfirmation($subject, $body, $email, $user, $token);

        Mail::to($email)->send($sendMemberConfirmationMail);
    }


}