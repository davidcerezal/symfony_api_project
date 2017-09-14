<?php
namespace AppBundle\Service;

use AppBundle\Model\Comunication;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Default class to process the logs
 *
 * @package AppBundle\Service\Parser
 * @author David Cerezal <david.cerezal77@gmail.com>
 */
class Parser
{
    /**
     *
     * Method to parse a Line a get the respective comunication
     *
     * @param  string $parsedLine
     * @return Comunication
     */
    public function parseComunication($parsedLine)
    {
        //Parse the type comunication
        $type = substr($parsedLine, 0, 1);
        if ($type) {
            if ($type == "C") {
                $type = "call";
            } elseif ($type == "S") {
                $type = "SMS";
            }
        } else {
            $type = "unkonw";
        }

        //Parse the nº comunication
        $call_number_sender = substr($parsedLine, 1, 9);
        if ($call_number_sender) {
            $call_number_sender = intval($call_number_sender);
        } else {
            $call_number_sender = 0;
        }

        //Parse the nº comunication
        $call_number_reciever = substr($parsedLine, 10, 9);
        if ($call_number_reciever) {
            $call_number_reciever = intval($call_number_reciever);
        } else {
            $call_number_reciever = 0;
        }

        //Parse the type comunication
        $is_send_reviece = substr($parsedLine, 19, 1);
        if ($is_send_reviece == "1" || $is_send_reviece == "0") {
            if ($is_send_reviece == "1") {
                $is_send_reviece = "Entrante";
            } else {
                $is_send_reviece = "Saliente";
            }
        } else {
            $is_send_reviece = 0;
        }

        //Parse the name comunication
        $name = substr($parsedLine, 20, 24);
        if ($name) {
            $name = str_replace('  ', '', $name);
        } else {
            $name = 0;
        }

        //Parse the date comunication
        $datetime = $this->parseDate(substr($parsedLine, 44, 14));

        //Parse the duration comunication
        $duration = $this->parseTime(substr($parsedLine, 58, 6));

        $comunication = new Comunication($type,
            $call_number_sender,
            $call_number_reciever,
            $is_send_reviece,
            $name,
            $datetime,
            $duration);

        return $comunication;
    }


    /**
     *
     * Method to parse a string into a date
     *
     * @param  string $parsedLine
     * @return \DateTime
     */
    public function parseDate($string)
    {
        $day = substr($string, 0, 2);
        $month = substr($string, 2, 2);
        $year = substr($string, 4, 4);
        $hour = substr($string, 8, 2);
        $minute = substr($string, 10, 12);
        $secs = substr($string, 12, 2);

        $datetime = new \DateTime();
        $datetime->setDate($year, $month, $day);
        $datetime->setTime($hour, $minute, $secs);

        return $datetime;
    }

    /**
     *
     * Method to parse a string into a time
     *
     * @param  string $parsedLine
     * @return string
     */
    public function parseTime($string)
    {
        $hour = substr($string, 0, 2);
        if (!$hour) {
            $hour = 0;
        }

        $minute = substr($string, 2, 2);
        if (!$minute) {
            $minute = 0;
        }

        $secs = substr($string, 4, 6);
        if (!$secs) {
            $secs = 0;
        }

        $result = $hour . ":" . $minute . ":" . $secs;
        return $result;
    }
}