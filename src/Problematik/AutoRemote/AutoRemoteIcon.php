<?php

namespace Problematik\AutoRemote;

/**
 * Icons that can be used in notifications
 * Currently lists only files located in AutoNotification's drawable-hdpi folder
 */

abstract class AutoRemoteIcon {

	const ACTION_ABOUT_DARK = "action_about_dark";
	const ACTION_HELP = "action_help";
	const ACTION_SEARCH = "action_search";
	const ACTION_SETTINGS_DARK = "action_settings_dark";
	const ALERTS_AND_STATES_AIRPLANE_MODE_OFF = "alerts_and_states_airplane_mode_off";
	const ALERTS_AND_STATES_AIRPLANE_MODE_ON = "alerts_and_states_airplane_mode_on";
	const ALERTS_AND_STATES_ERROR = "alerts_and_states_error";
	const ALERTS_AND_STATES_WARNING = "alerts_and_states_warning";
	const AV_ADD_TO_QUEUE = "av_add_to_queue";
	const AV_DOWNLOAD = "av_download";
	const AV_FAST_FORWARD = "av_fast_forward";
	const AV_FULL_SCREEN = "av_full_screen";
	const AV_MAKE_AVAILABLE_OFFLINE = "av_make_available_offline";
	const AV_NEXT = "av_next";
	const AV_PAUSE = "av_pause";
	const AV_PAUSE_OVER_VIDEO = "av_pause_over_video";
	const AV_PLAY = "av_play";
	const AV_PLAY_OVER_VIDEO_DARK = "av_play_over_video_dark";
	const AV_PREVIOUS = "av_previous";
	const AV_REPEAT = "av_repeat";
	const AV_REPLAY = "av_replay";
	const AV_RETURN_FROM_FULL_SCREEN = "av_return_from_full_screen";
	const AV_REWIND = "av_rewind";
	const AV_SHUFFLE = "av_shuffle";
	const AV_STOP = "av_stop";
	const AV_UPLOAD = "av_upload";
	const COLLECTIONS_CLOUD = "collections_cloud";
	const COLLECTIONS_COLLECTION = "collections_collection";
	const COLLECTIONS_GO_TO_TODAY = "collections_go_to_today";
	const COLLECTIONS_LABELS = "collections_labels";
	const COLLECTIONS_NEW_LABEL = "collections_new_label";
	const COLLECTIONS_SORT_BY_SIZE = "collections_sort_by_size";
	const COLLECTIONS_VIEW_AS_GRID = "collections_view_as_grid";
	const COLLECTIONS_VIEW_AS_LIST = "collections_view_as_list";
	const CONTENT_ATTACHMENT = "content_attachment";
	const CONTENT_BACKSPACE = "content_backspace";
	const CONTENT_COPY = "content_copy";
	const CONTENT_CUT = "content_cut";
	const CONTENT_DISCARD = "content_discard";
	const CONTENT_DISCARD_DARK = "content_discard_dark";
	const CONTENT_EDIT = "content_edit";
	const CONTENT_EMAIL = "content_email";
	const CONTENT_EVENT = "content_event";
	const CONTENT_IMPORT_EXPORT_DARK = "content_import_export_dark";
	const CONTENT_MERGE = "content_merge";
	const CONTENT_NEW_ATTACHMENT = "content_new_attachment";
	const CONTENT_NEW_DARK = "content_new_dark";
	const CONTENT_NEW_EMAIL = "content_new_email";
	const CONTENT_NEW_EMAIL_VIDEO_DARK = "content_new_email_video_dark";
	const CONTENT_NEW_EVENT = "content_new_event";
	const CONTENT_NEW_PICTURE = "content_new_picture";
	const CONTENT_PASTE = "content_paste";
	const CONTENT_PICTURE = "content_picture";
	const CONTENT_READ = "content_read";
	const CONTENT_REMOVE = "content_remove";
	const CONTENT_SAVE = "content_save";
	const CONTENT_SELECT_ALL = "content_select_all";
	const CONTENT_SPLIT = "content_split";
	const CONTENT_UNDO = "content_undo";
	const CONTENT_UNREAD = "content_unread";
	const DEVICE_ACCESS_ACCOUNTS = "device_access_accounts";
	const DEVICE_ACCESS_ADD_ALARM = "device_access_add_alarm";
	const DEVICE_ACCESS_ALARMS = "device_access_alarms";
	const DEVICE_ACCESS_BATTERY = "device_access_battery";
	const DEVICE_ACCESS_BIGHTNESS_LOW = "device_access_bightness_low";
	const DEVICE_ACCESS_BLUETOOTH = "device_access_bluetooth";
	const DEVICE_ACCESS_BLUETOOTH_CONNECTED = "device_access_bluetooth_connected";
	const DEVICE_ACCESS_BLUETOOTH_SEARCHING = "device_access_bluetooth_searching";
	const DEVICE_ACCESS_BRIGHTNESS_AUTO = "device_access_brightness_auto";
	const DEVICE_ACCESS_BRIGHTNESS_HIGH = "device_access_brightness_high";
	const DEVICE_ACCESS_BRIGHTNESS_MEDIUM = "device_access_brightness_medium";
	const DEVICE_ACCESS_CALL = "device_access_call";
	const DEVICE_ACCESS_CAMERA = "device_access_camera";
	const DEVICE_ACCESS_DATA_USAGE = "device_access_data_usage";
	const DEVICE_ACCESS_DIAL_PAD = "device_access_dial_pad";
	const DEVICE_ACCESS_END_CALL = "device_access_end_call";
	const DEVICE_ACCESS_FLASH_AUTOMATIC = "device_access_flash_automatic";
	const DEVICE_ACCESS_FLASH_OFF = "device_access_flash_off";
	const DEVICE_ACCESS_FLASH_ON = "device_access_flash_on";
	const DEVICE_ACCESS_LOCATION_FOUND = "device_access_location_found";
	const DEVICE_ACCESS_LOCATION_OFF = "device_access_location_off";
	const DEVICE_ACCESS_LOCATION_SEARCHING = "device_access_location_searching";
	const DEVICE_ACCESS_MIC = "device_access_mic";
	const DEVICE_ACCESS_MIC_MUTED = "device_access_mic_muted";
	const DEVICE_ACCESS_NETWORK_CELL = "device_access_network_cell";
	const DEVICE_ACCESS_NETWORK_WIFI = "device_access_network_wifi";
	const DEVICE_ACCESS_NEW_ACCOUNT = "device_access_new_account";
	const DEVICE_ACCESS_NOT_SECURE = "device_access_not_secure";
	const DEVICE_ACCESS_RING_VOLUME = "device_access_ring_volume";
	const DEVICE_ACCESS_SCREEN_LOCKED_TO_LANDSCAPE = "device_access_screen_locked_to_landscape";
	const DEVICE_ACCESS_SCREEN_LOCKED_TO_PORTRAIT = "device_access_screen_locked_to_portrait";
	const DEVICE_ACCESS_SCREEN_ROTATION = "device_access_screen_rotation";
	const DEVICE_ACCESS_SD_STORAGE_DARK = "device_access_sd_storage_dark";
	const DEVICE_ACCESS_SECURE = "device_access_secure";
	const DEVICE_ACCESS_STORAGE_DARK = "device_access_storage_dark";
	const DEVICE_ACCESS_SWITCH_CAMERA = "device_access_switch_camera";
	const DEVICE_ACCESS_SWITCH_VIDEO = "device_access_switch_video";
	const DEVICE_ACCESS_TIME = "device_access_time";
	const DEVICE_ACCESS_USB = "device_access_usb";
	const DEVICE_ACCESS_VIDEO = "device_access_video";
	const DEVICE_ACCESS_VOLUME_MUTED = "device_access_volume_muted";
	const DEVICE_ACCESS_VOLUME_ON = "device_access_volume_on";
	const HARDWARE_COMPUTER = "hardware_computer";
	const HARDWARE_DOCK = "hardware_dock";
	const HARDWARE_GAMEPAD = "hardware_gamepad";
	const HARDWARE_HEADPHONES = "hardware_headphones";
	const HARDWARE_HEADSET = "hardware_headset";
	const HARDWARE_KEYBOARD = "hardware_keyboard";
	const HARDWARE_MOUSE = "hardware_mouse";
	const HARDWARE_PHONE_DARK = "hardware_phone_dark";
	const IC_ACTION_ACHIEVEMENT = "ic_action_achievement";
	const IC_ACTION_ADD = "ic_action_add";
	const IC_ACTION_ALARM = "ic_action_alarm";
	const IC_ACTION_AMAZON = "ic_action_amazon";
	const IC_ACTION_ANCHOR = "ic_action_anchor";
	const IC_ACTION_ANDROID = "ic_action_android";
	const IC_ACTION_ARMCHAIR = "ic_action_armchair";
	const IC_ACTION_ARROW_BOTTOM = "ic_action_arrow_bottom";
	const IC_ACTION_ARROW_LEFT = "ic_action_arrow_left";
	const IC_ACTION_ARROW_LEFT_BOTTOM = "ic_action_arrow_left_bottom";
	const IC_ACTION_ARROW_LEFT_TOP = "ic_action_arrow_left_top";
	const IC_ACTION_ARROW_RIGHT = "ic_action_arrow_right";
	const IC_ACTION_ARROW_RIGHT_BOTTOM = "ic_action_arrow_right_bottom";
	const IC_ACTION_ARROW_RIGHT_TOP = "ic_action_arrow_right_top";
	const IC_ACTION_ARROW_TOP = "ic_action_arrow_top";
	const IC_ACTION_ATTACHMENT = "ic_action_attachment";
	const IC_ACTION_ATTACHMENT_2 = "ic_action_attachment_2";
	const IC_ACTION_BALL = "ic_action_ball";
	const IC_ACTION_BARCODE_1 = "ic_action_barcode_1";
	const IC_ACTION_BARCODE_2 = "ic_action_barcode_2";
	const IC_ACTION_BARGRAPH = "ic_action_bargraph";
	const IC_ACTION_BARS = "ic_action_bars";
	const IC_ACTION_BASKET = "ic_action_basket";
	const IC_ACTION_BIKE = "ic_action_bike";
	const IC_ACTION_BLOB = "ic_action_blob";
	const IC_ACTION_BLUETOOTH = "ic_action_bluetooth";
	const IC_ACTION_BOOK = "ic_action_book";
	const IC_ACTION_BOOKMARK = "ic_action_bookmark";
	const IC_ACTION_BRUSH = "ic_action_brush";
	const IC_ACTION_BUG = "ic_action_bug";
	const IC_ACTION_BULB = "ic_action_bulb";
	const IC_ACTION_BUSINESS = "ic_action_business";
	const IC_ACTION_CALENDAR_DAY = "ic_action_calendar_day";
	const IC_ACTION_CALENDAR_MONTH = "ic_action_calendar_month";
	const IC_ACTION_CAMERA = "ic_action_camera";
	const IC_ACTION_CANCEL = "ic_action_cancel";
	const IC_ACTION_CAR = "ic_action_car";
	const IC_ACTION_CIRCLES = "ic_action_circles";
	const IC_ACTION_CLOCK = "ic_action_clock";
	const IC_ACTION_CLOUD = "ic_action_cloud";
	const IC_ACTION_CLOUDY = "ic_action_cloudy";
	const IC_ACTION_COFFEE = "ic_action_coffee";
	const IC_ACTION_COFFEE2GO = "ic_action_coffee2go";
	const IC_ACTION_COLLAPSE = "ic_action_collapse";
	const IC_ACTION_CONTRAST = "ic_action_contrast";
	const IC_ACTION_COPY = "ic_action_copy";
	const IC_ACTION_CREDITCARD = "ic_action_creditcard";
	const IC_ACTION_CROP = "ic_action_crop";
	const IC_ACTION_CUT = "ic_action_cut";
	const IC_ACTION_DATABASE = "ic_action_database";
	const IC_ACTION_DIALER = "ic_action_dialer";
	const IC_ACTION_DIALOG = "ic_action_dialog";
	const IC_ACTION_DICE = "ic_action_dice";
	const IC_ACTION_DOCUMENT = "ic_action_document";
	const IC_ACTION_DONTLIKE = "ic_action_dontlike";
	const IC_ACTION_DOWNLOAD = "ic_action_download";
	const IC_ACTION_DRAG = "ic_action_drag";
	const IC_ACTION_DROP = "ic_action_drop";
	const IC_ACTION_DROPBOX = "ic_action_dropbox";
	const IC_ACTION_EDIT = "ic_action_edit";
	const IC_ACTION_EXIT = "ic_action_exit";
	const IC_ACTION_EXPAND = "ic_action_expand";
	const IC_ACTION_EXPORT = "ic_action_export";
	const IC_ACTION_FACEBOOK = "ic_action_facebook";
	const IC_ACTION_FEED = "ic_action_feed";
	const IC_ACTION_FILTER = "ic_action_filter";
	const IC_ACTION_FLAG = "ic_action_flag";
	const IC_ACTION_FLAGS = "ic_action_flags";
	const IC_ACTION_FLASH = "ic_action_flash";
	const IC_ACTION_FOLDER_CLOSED = "ic_action_folder_closed";
	const IC_ACTION_FOLDER_OPEN = "ic_action_folder_open";
	const IC_ACTION_FOLDER_TABS = "ic_action_folder_tabs";
	const IC_ACTION_GEAR = "ic_action_gear";
	const IC_ACTION_GLASSES = "ic_action_glasses";
	const IC_ACTION_GLOBE = "ic_action_globe";
	const IC_ACTION_GMAIL = "ic_action_gmail";
	const IC_ACTION_GOLEFT = "ic_action_goleft";
	const IC_ACTION_GORIGHT = "ic_action_goright";
	const IC_ACTION_GPLUS = "ic_action_gplus";
	const IC_ACTION_GROW = "ic_action_grow";
	const IC_ACTION_GUITAR = "ic_action_guitar";
	const IC_ACTION_HALT = "ic_action_halt";
	const IC_ACTION_HALT_DARK = "ic_action_halt_dark";
	const IC_ACTION_HAPPY = "ic_action_happy";
	const IC_ACTION_HEADPHONES = "ic_action_headphones";
	const IC_ACTION_HEART = "ic_action_heart";
	const IC_ACTION_HELP = "ic_action_help";
	const IC_ACTION_HOME = "ic_action_home";
	const IC_ACTION_IMPORT = "ic_action_import";
	const IC_ACTION_INBOX = "ic_action_inbox";
	const IC_ACTION_INFO = "ic_action_info";
	const IC_ACTION_IO = "ic_action_io";
	const IC_ACTION_JOYPAD = "ic_action_joypad";
	const IC_ACTION_KEY = "ic_action_key";
	const IC_ACTION_KNIGHT = "ic_action_knight";
	const IC_ACTION_LAB = "ic_action_lab";
	const IC_ACTION_LAPTOP = "ic_action_laptop";
	const IC_ACTION_LIKE = "ic_action_like";
	const IC_ACTION_LINK = "ic_action_link";
	const IC_ACTION_LINKEDIN = "ic_action_linkedin";
	const IC_ACTION_LIST = "ic_action_list";
	const IC_ACTION_LIST_2 = "ic_action_list_2";
	const IC_ACTION_LOCATION = "ic_action_location";
	const IC_ACTION_LOCK_CLOSED = "ic_action_lock_closed";
	const IC_ACTION_LOCK_OPEN = "ic_action_lock_open";
	const IC_ACTION_MAGNET = "ic_action_magnet";
	const IC_ACTION_MAIL = "ic_action_mail";
	const IC_ACTION_MAP = "ic_action_map";
	const IC_ACTION_MIC = "ic_action_mic";
	const IC_ACTION_MICOFF = "ic_action_micoff";
	const IC_ACTION_MIST = "ic_action_mist";
	const IC_ACTION_MONITOR = "ic_action_monitor";
	const IC_ACTION_MONOLOG = "ic_action_monolog";
	const IC_ACTION_MORE = "ic_action_more";
	const IC_ACTION_MOVIE = "ic_action_movie";
	const IC_ACTION_MUSIC_1 = "ic_action_music_1";
	const IC_ACTION_MUSIC_2 = "ic_action_music_2";
	const IC_ACTION_NAVIGATE = "ic_action_navigate";
	const IC_ACTION_OVERFLOW = "ic_action_overflow";
	const IC_ACTION_PASTE = "ic_action_paste";
	const IC_ACTION_PAYPAL = "ic_action_paypal";
	const IC_ACTION_PHONE = "ic_action_phone";
	const IC_ACTION_PHONE_END = "ic_action_phone_end";
	const IC_ACTION_PHONE_INCOMING = "ic_action_phone_incoming";
	const IC_ACTION_PHONE_MISSED = "ic_action_phone_missed";
	const IC_ACTION_PHONE_OUTGOING = "ic_action_phone_outgoing";
	const IC_ACTION_PHONE_START = "ic_action_phone_start";
	const IC_ACTION_PICKER = "ic_action_picker";
	const IC_ACTION_PICTURE = "ic_action_picture";
	const IC_ACTION_PIE_CHART = "ic_action_pie_chart";
	const IC_ACTION_PILL = "ic_action_pill";
	const IC_ACTION_PIN = "ic_action_pin";
	const IC_ACTION_PLANE = "ic_action_plane";
	const IC_ACTION_PLANET = "ic_action_planet";
	const IC_ACTION_PLAYBACK_FORW = "ic_action_playback_forw";
	const IC_ACTION_PLAYBACK_NEXT = "ic_action_playback_next";
	const IC_ACTION_PLAYBACK_PAUSE = "ic_action_playback_pause";
	const IC_ACTION_PLAYBACK_PLAY = "ic_action_playback_play";
	const IC_ACTION_PLAYBACK_PREV = "ic_action_playback_prev";
	const IC_ACTION_PLAYBACK_REPEAT = "ic_action_playback_repeat";
	const IC_ACTION_PLAYBACK_REPEAT_1 = "ic_action_playback_repeat_1";
	const IC_ACTION_PLAYBACK_REW = "ic_action_playback_rew";
	const IC_ACTION_PLAYBACK_SCHUFFLE = "ic_action_playback_schuffle";
	const IC_ACTION_PLAYBACK_STOP = "ic_action_playback_stop";
	const IC_ACTION_PLUSONE = "ic_action_plusone";
	const IC_ACTION_PRESENT = "ic_action_present";
	const IC_ACTION_PUZZLE = "ic_action_puzzle";
	const IC_ACTION_RAIN = "ic_action_rain";
	const IC_ACTION_RECORD = "ic_action_record";
	const IC_ACTION_REDO = "ic_action_redo";
	const IC_ACTION_RELOAD = "ic_action_reload";
	const IC_ACTION_RESTAURANT = "ic_action_restaurant";
	const IC_ACTION_ROCKET = "ic_action_rocket";
	const IC_ACTION_RULER = "ic_action_ruler";
	const IC_ACTION_SAD = "ic_action_sad";
	const IC_ACTION_SEARCH = "ic_action_search";
	const IC_ACTION_SEND = "ic_action_send";
	const IC_ACTION_SETTINGS = "ic_action_settings";
	const IC_ACTION_SHARE = "ic_action_share";
	const IC_ACTION_SHARE_2 = "ic_action_share_2";
	const IC_ACTION_SHIELD = "ic_action_shield";
	const IC_ACTION_SHOW = "ic_action_show";
	const IC_ACTION_SIGNAL = "ic_action_signal";
	const IC_ACTION_SMS = "ic_action_sms";
	const IC_ACTION_SORT_1 = "ic_action_sort_1";
	const IC_ACTION_SORT_2 = "ic_action_sort_2";
	const IC_ACTION_SOUNDCLOUD = "ic_action_soundcloud";
	const IC_ACTION_STAR_0 = "ic_action_star_0";
	const IC_ACTION_STAR_10 = "ic_action_star_10";
	const IC_ACTION_STAR_5 = "ic_action_star_5";
	const IC_ACTION_SUN = "ic_action_sun";
	const IC_ACTION_TABLET = "ic_action_tablet";
	const IC_ACTION_TAG = "ic_action_tag";
	const IC_ACTION_TAGS = "ic_action_tags";
	const IC_ACTION_TEMPERATURE = "ic_action_temperature";
	const IC_ACTION_TICK = "ic_action_tick";
	const IC_ACTION_TICKET = "ic_action_ticket";
	const IC_ACTION_TILES_LARGE = "ic_action_tiles_large";
	const IC_ACTION_TILES_SMALL = "ic_action_tiles_small";
	const IC_ACTION_TRASH = "ic_action_trash";
	const IC_ACTION_TSHIRT = "ic_action_tshirt";
	const IC_ACTION_TUMBLR = "ic_action_tumblr";
	const IC_ACTION_TV = "ic_action_tv";
	const IC_ACTION_TWITTER = "ic_action_twitter";
	const IC_ACTION_UMBRELLA = "ic_action_umbrella";
	const IC_ACTION_UNDO = "ic_action_undo";
	const IC_ACTION_UPLOAD = "ic_action_upload";
	const IC_ACTION_USER = "ic_action_user";
	const IC_ACTION_USERS = "ic_action_users";
	const IC_ACTION_VIDEO = "ic_action_video";
	const IC_ACTION_VIMEO = "ic_action_vimeo";
	const IC_ACTION_VOLUME = "ic_action_volume";
	const IC_ACTION_VOLUME_DOWN = "ic_action_volume_down";
	const IC_ACTION_VOLUME_MUTE = "ic_action_volume_mute";
	const IC_ACTION_VOLUME_UP = "ic_action_volume_up";
	const IC_ACTION_WARNING = "ic_action_warning";
	const IC_ACTION_WHEEL = "ic_action_wheel";
	const IC_ACTION_WIFI = "ic_action_wifi";
	const IC_ACTION_WIZARD = "ic_action_wizard";
	const IC_ACTION_YINYANG = "ic_action_yinyang";
	const IC_ACTION_YOUTUBE = "ic_action_youtube";
	const IC_LAUNCHER = "ic_launcher";
	const IC_MENU_COPY_HOLO_DARK = "ic_menu_copy_holo_dark";
	const IC_TASKERORIGINAL = "ic_taskeroriginal";
	const IMAGES_CROP = "images_crop";
	const IMAGES_ROTATE_LEFT = "images_rotate_left";
	const IMAGES_ROTATE_RIGHT = "images_rotate_right";
	const IMAGES_SLIDESHOW = "images_slideshow";
	const LOCATION_DIRECTIONS = "location_directions";
	const LOCATION_MAP = "location_map";
	const LOCATION_PLACE = "location_place";
	const LOCATION_WEB_SITE = "location_web_site";
	const NAVIGATION_ACCEPT = "navigation_accept";
	const NAVIGATION_ACCEPT_DARK = "navigation_accept_dark";
	const NAVIGATION_BACK = "navigation_back";
	const NAVIGATION_CANCEL = "navigation_cancel";
	const NAVIGATION_CANCEL_DARK = "navigation_cancel_dark";
	const NAVIGATION_COLLAPSE = "navigation_collapse";
	const NAVIGATION_EXPAND = "navigation_expand";
	const NAVIGATION_FORWARD = "navigation_forward";
	const NAVIGATION_NEXT_ITEM = "navigation_next_item";
	const NAVIGATION_PREVIOUS_ITEM = "navigation_previous_item";
	const NAVIGATION_REFRESH = "navigation_refresh";
	const RATING_BAD = "rating_bad";
	const RATING_FAVORITE = "rating_favorite";
	const RATING_GOOD = "rating_good";
	const RATING_HALF_IMPORTANT = "rating_half_important";
	const RATING_IMPORTANT = "rating_important";
	const RATING_NOT_IMPORTANT = "rating_not_important";
	const SOCIAL_ADD_GROUP = "social_add_group";
	const SOCIAL_ADD_PERSON = "social_add_person";
	const SOCIAL_CC_BCC = "social_cc_bcc";
	const SOCIAL_CHAT = "social_chat";
	const SOCIAL_FORWARD = "social_forward";
	const SOCIAL_GROUP_DARK = "social_group_dark";
	const SOCIAL_PERSON = "social_person";
	const SOCIAL_REPLY = "social_reply";
	const SOCIAL_REPLY_ALL = "social_reply_all";
	const SOCIAL_SEND_NOW = "social_send_now";
	const SOCIAL_SHARE = "social_share";
}
