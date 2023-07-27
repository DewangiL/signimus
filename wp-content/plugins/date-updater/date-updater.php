<?php
/**
 * Plugin Name: Date Updater - Current Month & Year Shortcodes
 * Plugin URI: https://wpblogging101.com/plugin/date-updater/
 * Description: Stay Dynamic with the Top-Rated WordPress Shortcodes Plugin: Effortlessly Show and Update Dates, Months, Years, and Beyond - All for Free!
 * Version: 1.0.1
 * Requires at least: 6.0
 * Requires PHP: 7.2
 * Author: Harpreet Kumar
 * Author URI: https://harpreetkumar.com/
 * License: GPL-2.0-or-later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: date-updater
 * Domain Path: /languages
 *
 * @package Date Updater
 * @link              https://harpreetkumar.com/
 * @since             1.0.0
 */


// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('DATE-UPDATER_VERSION', '1.0.0');

/**
 * Shortcode: [date]
 * Description: Renders today's date.
 * Example usage: [date] (Output: May 12, 2023)
 */
function dynadates_shortcode_today_date()
{
    return date("F j, Y");
}
add_shortcode('date', 'dynadates_shortcode_today_date');

/**
 * Shortcode: [p-date]
 * Description: Renders the previous date.
 * Example usage: [p-date] (Output: May 11, 2023)
 */
function dynadates_shortcode_previous_date()
{
    $prevDate = date("Y-m-d", strtotime("-1 day"));
    return date("F j, Y", strtotime($prevDate));
}
add_shortcode('p-date', 'dynadates_shortcode_previous_date');

/**
 * Shortcode: [n-date]
 * Description: Renders the next date.
 * Example usage: [n-date] (Output: May 13, 2023)
 */
function dynadates_shortcode_next_date()
{
    $nextDate = date("Y-m-d", strtotime("+1 day"));
    return date("F j, Y", strtotime($nextDate));
}
add_shortcode('n-date', 'dynadates_shortcode_next_date');


/**
 * Shortcode: [month]
 * Description: Renders the current month.
 * Example usage: [month] (Output: May)
 */
function dynadates_shortcode_month()
{
    return date("F");
}
add_shortcode('month', 'dynadates_shortcode_month');

/**
 * Shortcode: [mn]
 * Description: Renders the abbreviated current month.
 * Example usage: [mn] (Output: May)
 */
function dynadates_shortcode_short_month()
{
    return date("M");
}
add_shortcode('mn', 'dynadates_shortcode_short_month');

/**
 * Shortcode: [p-month]
 * Description: Renders the previous month.
 * Example usage: [p-month] (Output: April)
 */
function dynadates_shortcode_previous_month()
{
    $prevMonth = date('m') - 1;
    return date("F", mktime(0, 0, 0, $prevMonth, 1));
}
add_shortcode('p-month', 'dynadates_shortcode_previous_month');

/**
 * Shortcode: [n-month]
 * Description: Renders the next month.
 * Example usage: [n-month] (Output: June)
 */
function dynadates_shortcode_next_month()
{
    $nextMonth = date('m') + 1;
    return date("F", mktime(0, 0, 0, $nextMonth, 1));
}
add_shortcode('n-month', 'dynadates_shortcode_next_month');

/**
 * Shortcode: [p-mn]
 * Description: Renders the abbreviated previous month.
 * Example usage: [p-mn] (Output: Apr)
 */
function dynadates_shortcode_previous_short_month()
{
    $prevMonth = date('m') - 1;
    return date("M", mktime(0, 0, 0, $prevMonth, 1));
}
add_shortcode('p-mn', 'dynadates_shortcode_previous_short_month');

/**
 * Shortcode: [n-mn]
 * Description: Renders the abbreviated next month.
 * Example usage: [n-mn] (Output: Jun)
 */
function dynadates_shortcode_next_short_month()
{
    $nextMonth = date('m') + 1;
    return date("M", mktime(0, 0, 0, $nextMonth, 1));
}
add_shortcode('n-mn', 'dynadates_shortcode_next_short_month');

/**
 * Shortcode: [year]
 * Description: Renders the current year.
 * Example usage: [year] (Output: 2023)
 */
function dynadates_shortcode_year()
{
    return date("Y");
}
add_shortcode('year', 'dynadates_shortcode_year');

/**
 * Shortcode: [p-year]
 * Description: Renders the previous year.
 * Example usage: [p-year] (Output: 2022)
 */
function dynadates_shortcode_previous_year()
{
    $prevYear = date("Y", strtotime("-1 year"));
    return $prevYear;
}
add_shortcode('p-year', 'dynadates_shortcode_previous_year');

/**
 * Shortcode: [n-year]
 * Description: Renders the next year.
 * Example usage: [n-year] (Output: 2024)
 */
function dynadates_shortcode_next_year()
{
    $nextYear = date("Y", strtotime("+1 year"));
    return $nextYear;
}
add_shortcode('n-year', 'dynadates_shortcode_next_year');

/**
 * Shortcode: [yr]
 * Description: Renders the abbreviated current year.
 * Example usage: [yr] (Output: 23)
 */
function dynadates_shortcode_short_year()
{
    return date("y");
}
add_shortcode('yr', 'dynadates_shortcode_short_year');

/**
 * Shortcode: [p-yr]
 * Description: Renders the abbreviated previous year.
 * Example usage: [p-yr] (Output: 22)
 */
function dynadates_shortcode_previous_short_year()
{
    $prevYear = date('Y') - 1;
    return date("y", mktime(0, 0, 0, 1, 1, $prevYear));
}
add_shortcode('p-yr', 'dynadates_shortcode_previous_short_year');

/**
 * Shortcode: [n-yr]
 * Description: Renders the abbreviated next year.
 * Example usage: [n-yr] (Output: 24)
 */
function dynadates_shortcode_next_short_year()
{
    $nextYear = date('Y') + 1;
    return date("y", mktime(0, 0, 0, 1, 1, $nextYear));
}
add_shortcode('n-yr', 'dynadates_shortcode_next_short_year');

/**
 * Shortcode: [blackfriday]
 * Description: Renders the date of Black Friday for the current year.
 * Example usage: [blackfriday] (Output: November 25, 2023)
 */
function dynadates_shortcode_black_friday() {
    $blackFriday = strtotime('last friday of november ' . date('Y'));
    return date("F j, Y", $blackFriday);
}
add_shortcode('blackfriday', 'dynadates_shortcode_black_friday');

/**
 * Shortcode: [p-blackfriday]
 * Description: Renders the date of Black Friday for the previous year.
 * Example usage: [p-blackfriday] (Output: November 26, 2022)
 */
function dynadates_shortcode_previous_black_friday() {
    $prevBlackFriday = strtotime('last friday of november ' . (date('Y') - 1));
    return date("F j, Y", $prevBlackFriday);
}
add_shortcode('p-blackfriday', 'dynadates_shortcode_previous_black_friday');

/**
 * Shortcode: [n-blackfriday]
 * Description: Renders the date of Black Friday for the next year.
 * Example usage: [n-blackfriday] (Output: November 24, 2024)
 */
function dynadates_shortcode_next_black_friday() {
    $nextBlackFriday = strtotime('last friday of november ' . (date('Y') + 1));
    return date("F j, Y", $nextBlackFriday);
}
add_shortcode('n-blackfriday', 'dynadates_shortcode_next_black_friday');

/**
 * Shortcode: [bf]
 * Description: Renders the date of Black Friday for the current year in short format.
 * Example usage: [bf] (Output: Nov 25, 2023)
 */
function dynadates_shortcode_black_friday_short() {
    $blackFriday = strtotime('last friday of november ' . date('Y'));
    return date("M j, Y", $blackFriday);
}
add_shortcode('bf', 'dynadates_shortcode_black_friday_short');

/**
 * Shortcode: [p-bf]
 * Description: Renders the date of Black Friday for the previous year in short format.
 * Example usage: [p-bf] (Output: Nov 26, 2022)
 */
function dynadates_shortcode_previous_black_friday_short() {
    $prevBlackFriday = strtotime('last friday of november ' . (date('Y') - 1));
    return date("M j, Y", $prevBlackFriday);
}
add_shortcode('p-bf', 'dynadates_shortcode_previous_black_friday_short');

/**
 * Shortcode: [n-bf]
 * Description: Renders the date of Black Friday for the next year in short format.
 * Example usage: [n-bf] (Output: Nov 24, 2024)
 */
function dynadates_shortcode_next_black_friday_short() {
    $nextBlackFriday = strtotime('last friday of november ' . (date('Y') + 1));
    return date("M j, Y", $nextBlackFriday);
}
add_shortcode('n-bf', 'dynadates_shortcode_next_black_friday_short');



/**
 * Shortcode: [cybermonday]
 * Description: Renders the date of Cyber Monday for the current year.
 * Example usage: [cybermonday] (Output: November 27, 2023)
 */
function dynadates_shortcode_cyber_monday()
{
    $cyberMonday = strtotime('second monday of december ' . date('Y'));
    return date("F j, Y", $cyberMonday);
}
add_shortcode('cybermonday', 'dynadates_shortcode_cyber_monday');

/**
 * Shortcode: [p-cybermonday]
 * Description: Renders the date of Cyber Monday for the previous year.
 * Example usage: [p-cybermonday] (Output: December 5, 2022)
 */
function dynadates_shortcode_previous_cyber_monday()
{
    $prevCyberMonday = strtotime('second monday of december ' . (date('Y') - 1));
    return date("F j, Y", $prevCyberMonday);
}
add_shortcode('p-cybermonday', 'dynadates_shortcode_previous_cyber_monday');

/**
 * Shortcode: [n-cybermonday]
 * Description: Renders the date of Cyber Monday for the next year.
 * Example usage: [n-cybermonday] (Output: December 4, 2024)
 */
function dynadates_shortcode_next_cyber_monday()
{
    $nextCyberMonday = strtotime('second monday of december ' . (date('Y') + 1));
    return date("F j, Y", $nextCyberMonday);
}
add_shortcode('n-cybermonday', 'dynadates_shortcode_next_cyber_monday');

/**
 * Shortcode: [cm]
 * Description: Renders the date of Cyber Monday for the current year in short format.
 * Example usage: [cm] (Output: Nov 27, 2023)
 */
function dynadates_shortcode_cyber_monday_short() {
    $cyberMonday = strtotime('second monday of december ' . date('Y'));
    return date("M j, Y", $cyberMonday);
}
add_shortcode('cm', 'dynadates_shortcode_cyber_monday_short');

/**
 * Shortcode: [p-cm]
 * Description: Renders the date of Cyber Monday for the previous year in short format.
 * Example usage: [p-cm] (Output: Dec 5, 2022)
 */
function dynadates_shortcode_previous_cyber_monday_short() {
    $prevCyberMonday = strtotime('second monday of december ' . (date('Y') - 1));
    return date("M j, Y", $prevCyberMonday);
}
add_shortcode('p-cm', 'dynadates_shortcode_previous_cyber_monday_short');

/**
 * Shortcode: [n-cm]
 * Description: Renders the date of Cyber Monday for the next year in short format.
 * Example usage: [n-cm] (Output: Dec 4, 2024)
 */
function dynadates_shortcode_next_cyber_monday_short() {
    $nextCyberMonday = strtotime('second monday of december ' . (date('Y') + 1));
    return date("M j, Y", $nextCyberMonday);
}
add_shortcode('n-cm', 'dynadates_shortcode_next_cyber_monday_short');



// Include shortcode support file
require_once plugin_dir_path(__FILE__) . 'date-updater-shortcode-support.php';
