<p align="center">
    <a href="" rel="noopener">
        <img width="700" height="400" src="https://github.com/user-attachments/assets/ef1c4f4d-ce20-42ae-b88d-7e5d37df3223" alt="Project logo">
    </a>
</p>

<h3 align="center">ougc Theme File Templates</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/OUGC-Network/ougc-Theme-File-Templates.svg)](https://github.com/OUGC-Network/ougc-Theme-File-Templates/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/OUGC-Network/ougc-Theme-File-Templates.svg)](https://github.com/OUGC-Network/ougc-Theme-File-Templates/pulls)
[![License](https://img.shields.io/badge/license-GPL-blue)](/https://github.com/OUGC-Network/ougc-Theme-File-Templates/blob/main/LICENSE.txt)

</div>

---

<p align="center"> Allow edition of templates from within the file system.
    <br> 
</p>

## 📜 Table of Contents <a name = "table_of_contents"></a>

- [About](#about)
- [Getting Started](#getting_started)
    - [Dependencies](#dependencies)
    - [File Structure](#file_structure)
    - [Install](#install)
    - [Update](#update)
- [Settings](#settings)
- [Built Using](#built_using)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)
- [Support & Feedback](#support)

## 🚀 About <a name = "about"></a>

Allow edition of templates from within the file system.

[Go up to Table of Contents](#table_of_contents)

## 📍 Getting Started <a name = "getting_started"></a>

The following information will assist you into getting a copy of this plugin up and running on your forum.

### Dependencies <a name = "dependencies"></a>

A setup that meets the following requirements is necessary to use this plugin.

- [MyBB](https://mybb.com/) >= 1.8.39
- PHP >= 8.0
- [MyBB-PluginLibrary](https://github.com/frostschutz/MyBB-PluginLibrary) >= 13

### File structure <a name = "file_structure"></a>

  ```
   .
   ├── inc
   │ ├── languages
   │ │ ├── english
   │ │ │ ├── admin
   │ │ │ │ ├── ougcThemeFileTemplates.lang.php
   │ ├── plugins
   │ │ ├── ougc
   │ │ │ ├── ThemeFileTemplates
   │ │ │ │ ├── hooks
   │ │ │ │ │ ├── admin.php
   │ │ │ │ │ ├── forum.php
   │ │ │ │ │ ├── shared.php
   │ │ │ │ ├── stylesheets
   │ │ │ │ │ ├── 
   │ │ │ │ │ ├── css3.css
   │ │ │ │ │ ├── global.css
   │ │ │ │ │ ├── modcp.css
   │ │ │ │ │ ├── showthread.css
   │ │ │ │ │ ├── star_ratings.css
   │ │ │ │ │ ├── thread_status.css
   │ │ │ │ │ ├── usercp.css
   │ │ │ │ ├── templates
   │ │ │ │ │ ├── announcement.html
   │ │ │ │ │ ├── announcement_edit.html
   │ │ │ │ │ ├── announcement_quickdelete.html
   │ │ │ │ │ ├── attachment_icon.html
   │ │ │ │ │ ├── calendar.html
   │ │ │ │ │ ├── calendar_addevent.html
   │ │ │ │ │ ├── calendar_addevent_calendarselect.html
   │ │ │ │ │ ├── calendar_addevent_calendarselect_hidden.html
   │ │ │ │ │ ├── calendar_addeventlink.html
   │ │ │ │ │ ├── calendar_addprivateevent.html
   │ │ │ │ │ ├── calendar_addpublicevent.html
   │ │ │ │ │ ├── calendar_day.html
   │ │ │ │ │ ├── calendar_dayview.html
   │ │ │ │ │ ├── calendar_dayview_birthdays.html
   │ │ │ │ │ ├── calendar_dayview_birthdays_bday.html
   │ │ │ │ │ ├── calendar_dayview_event.html
   │ │ │ │ │ ├── calendar_dayview_noevents.html
   │ │ │ │ │ ├── calendar_editevent.html
   │ │ │ │ │ ├── calendar_event.html
   │ │ │ │ │ ├── calendar_event_editbutton.html
   │ │ │ │ │ ├── calendar_event_modoptions.html
   │ │ │ │ │ ├── calendar_event_userstar.html
   │ │ │ │ │ ├── calendar_eventbit.html
   │ │ │ │ │ ├── calendar_jump.html
   │ │ │ │ │ ├── calendar_jump_option.html
   │ │ │ │ │ ├── calendar_mini.html
   │ │ │ │ │ ├── calendar_mini_weekdayheader.html
   │ │ │ │ │ ├── calendar_mini_weekrow.html
   │ │ │ │ │ ├── calendar_mini_weekrow_day.html
   │ │ │ │ │ ├── calendar_mini_weekrow_day_link.html
   │ │ │ │ │ ├── calendar_move.html
   │ │ │ │ │ ├── calendar_nextlink.html
   │ │ │ │ │ ├── calendar_prevlink.html
   │ │ │ │ │ ├── calendar_repeats.html
   │ │ │ │ │ ├── calendar_select.html
   │ │ │ │ │ ├── calendar_weekdayheader.html
   │ │ │ │ │ ├── calendar_weekrow.html
   │ │ │ │ │ ├── calendar_weekrow_currentday.html
   │ │ │ │ │ ├── calendar_weekrow_day.html
   │ │ │ │ │ ├── calendar_weekrow_day_birthdays.html
   │ │ │ │ │ ├── calendar_weekrow_day_events.html
   │ │ │ │ │ ├── calendar_weekrow_day_external.html
   │ │ │ │ │ ├── calendar_weekrow_day_today.html
   │ │ │ │ │ ├── calendar_weekrow_thismonth.html
   │ │ │ │ │ ├── calendar_weekview.html
   │ │ │ │ │ ├── calendar_weekview_day.html
   │ │ │ │ │ ├── calendar_weekview_day_birthdays.html
   │ │ │ │ │ ├── calendar_weekview_day_event.html
   │ │ │ │ │ ├── calendar_weekview_day_event_time.html
   │ │ │ │ │ ├── calendar_weekview_month.html
   │ │ │ │ │ ├── calendar_weekview_nextlink.html
   │ │ │ │ │ ├── calendar_weekview_prevlink.html
   │ │ │ │ │ ├── calendar_year.html
   │ │ │ │ │ ├── calendar_year_sel.html
   │ │ │ │ │ ├── changeuserbox.html
   │ │ │ │ │ ├── codebuttons.html
   │ │ │ │ │ ├── contact.html
   │ │ │ │ │ ├── debug_summary.html
   │ │ │ │ │ ├── delete_attachments_button.html
   │ │ │ │ │ ├── editpost.html
   │ │ │ │ │ ├── editpost_delete.html
   │ │ │ │ │ ├── editpost_disablesmilies.html
   │ │ │ │ │ ├── editpost_postoptions.html
   │ │ │ │ │ ├── editpost_reason.html
   │ │ │ │ │ ├── editpost_signature.html
   │ │ │ │ │ ├── error.html
   │ │ │ │ │ ├── error_inline.html
   │ │ │ │ │ ├── error_inline_item.html
   │ │ │ │ │ ├── error_nopermission.html
   │ │ │ │ │ ├── error_nopermission_loggedin.html
   │ │ │ │ │ ├── footer.html
   │ │ │ │ │ ├── footer_contactus.html
   │ │ │ │ │ ├── footer_languageselect.html
   │ │ │ │ │ ├── footer_languageselect_option.html
   │ │ │ │ │ ├── footer_showteamlink.html
   │ │ │ │ │ ├── footer_themeselect.html
   │ │ │ │ │ ├── footer_themeselector.html
   │ │ │ │ │ ├── forumbit_depth1_cat.html
   │ │ │ │ │ ├── forumbit_depth1_cat_subforum.html
   │ │ │ │ │ ├── forumbit_depth1_forum_lastpost.html
   │ │ │ │ │ ├── forumbit_depth2_cat.html
   │ │ │ │ │ ├── forumbit_depth2_forum.html
   │ │ │ │ │ ├── forumbit_depth2_forum_lastpost.html
   │ │ │ │ │ ├── forumbit_depth2_forum_lastpost_hidden.html
   │ │ │ │ │ ├── forumbit_depth2_forum_lastpost_never.html
   │ │ │ │ │ ├── forumbit_depth2_forum_unapproved_posts.html
   │ │ │ │ │ ├── forumbit_depth2_forum_unapproved_threads.html
   │ │ │ │ │ ├── forumbit_depth2_forum_viewers.html
   │ │ │ │ │ ├── forumbit_depth3.html
   │ │ │ │ │ ├── forumbit_depth3_statusicon.html
   │ │ │ │ │ ├── forumbit_moderators.html
   │ │ │ │ │ ├── forumbit_moderators_group.html
   │ │ │ │ │ ├── forumbit_moderators_user.html
   │ │ │ │ │ ├── forumbit_subforums.html
   │ │ │ │ │ ├── forumdisplay.html
   │ │ │ │ │ ├── forumdisplay_announcement_rating.html
   │ │ │ │ │ ├── forumdisplay_announcements.html
   │ │ │ │ │ ├── forumdisplay_announcements_announcement.html
   │ │ │ │ │ ├── forumdisplay_announcements_announcement_modbit.html
   │ │ │ │ │ ├── forumdisplay_forumsort.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_approveunapprove.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_col.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_custom.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_custom_tool.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_delete.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_manage.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_openclose.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_restore.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_selectall.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_softdelete.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_standard.html
   │ │ │ │ │ ├── forumdisplay_inlinemoderation_stickunstick.html
   │ │ │ │ │ ├── forumdisplay_moderatedby.html
   │ │ │ │ │ ├── forumdisplay_newthread.html
   │ │ │ │ │ ├── forumdisplay_nopermission.html
   │ │ │ │ │ ├── forumdisplay_nothreads.html
   │ │ │ │ │ ├── forumdisplay_orderarrow.html
   │ │ │ │ │ ├── forumdisplay_password.html
   │ │ │ │ │ ├── forumdisplay_password_wrongpass.html
   │ │ │ │ │ ├── forumdisplay_rssdiscovery.html
   │ │ │ │ │ ├── forumdisplay_rules.html
   │ │ │ │ │ ├── forumdisplay_rules_link.html
   │ │ │ │ │ ├── forumdisplay_searchforum.html
   │ │ │ │ │ ├── forumdisplay_sticky_sep.html
   │ │ │ │ │ ├── forumdisplay_subforums.html
   │ │ │ │ │ ├── forumdisplay_thread.html
   │ │ │ │ │ ├── forumdisplay_thread_attachment_count.html
   │ │ │ │ │ ├── forumdisplay_thread_deleted.html
   │ │ │ │ │ ├── forumdisplay_thread_gotounread.html
   │ │ │ │ │ ├── forumdisplay_thread_icon.html
   │ │ │ │ │ ├── forumdisplay_thread_modbit.html
   │ │ │ │ │ ├── forumdisplay_thread_multipage.html
   │ │ │ │ │ ├── forumdisplay_thread_multipage_more.html
   │ │ │ │ │ ├── forumdisplay_thread_multipage_page.html
   │ │ │ │ │ ├── forumdisplay_thread_rating.html
   │ │ │ │ │ ├── forumdisplay_thread_rating_moved.html
   │ │ │ │ │ ├── forumdisplay_thread_unapproved_posts.html
   │ │ │ │ │ ├── forumdisplay_threadlist.html
   │ │ │ │ │ ├── forumdisplay_threadlist_clearpass.html
   │ │ │ │ │ ├── forumdisplay_threadlist_prefixes.html
   │ │ │ │ │ ├── forumdisplay_threadlist_prefixes_prefix.html
   │ │ │ │ │ ├── forumdisplay_threadlist_rating.html
   │ │ │ │ │ ├── forumdisplay_threadlist_sortrating.html
   │ │ │ │ │ ├── forumdisplay_threadlist_subscription.html
   │ │ │ │ │ ├── forumdisplay_threads_sep.html
   │ │ │ │ │ ├── forumdisplay_usersbrowsing.html
   │ │ │ │ │ ├── forumdisplay_usersbrowsing_user.html
   │ │ │ │ │ ├── forumjump_advanced.html
   │ │ │ │ │ ├── forumjump_bit.html
   │ │ │ │ │ ├── forumjump_special.html
   │ │ │ │ │ ├── global_awaiting_activation.html
   │ │ │ │ │ ├── global_bannedwarning.html
   │ │ │ │ │ ├── global_board_offline_modal.html
   │ │ │ │ │ ├── global_boardclosed_reason.html
   │ │ │ │ │ ├── global_boardclosed_warning.html
   │ │ │ │ │ ├── global_dst_detection.html
   │ │ │ │ │ ├── global_moderation_notice.html
   │ │ │ │ │ ├── global_modqueue.html
   │ │ │ │ │ ├── global_modqueue_notice.html
   │ │ │ │ │ ├── global_no_permission_modal.html
   │ │ │ │ │ ├── global_pending_joinrequests.html
   │ │ │ │ │ ├── global_pm_alert.html
   │ │ │ │ │ ├── global_remote_avatar_notice.html
   │ │ │ │ │ ├── global_unreadreports.html
   │ │ │ │ │ ├── gobutton.html
   │ │ │ │ │ ├── header.html
   │ │ │ │ │ ├── header_menu_calendar.html
   │ │ │ │ │ ├── header_menu_memberlist.html
   │ │ │ │ │ ├── header_menu_portal.html
   │ │ │ │ │ ├── header_menu_search.html
   │ │ │ │ │ ├── header_quicksearch.html
   │ │ │ │ │ ├── header_welcomeblock_guest.html
   │ │ │ │ │ ├── header_welcomeblock_guest_login_modal.html
   │ │ │ │ │ ├── header_welcomeblock_guest_login_modal_lockout.html
   │ │ │ │ │ ├── header_welcomeblock_member.html
   │ │ │ │ │ ├── header_welcomeblock_member_admin.html
   │ │ │ │ │ ├── header_welcomeblock_member_buddy.html
   │ │ │ │ │ ├── header_welcomeblock_member_moderator.html
   │ │ │ │ │ ├── header_welcomeblock_member_pms.html
   │ │ │ │ │ ├── header_welcomeblock_member_search.html
   │ │ │ │ │ ├── header_welcomeblock_member_user.html
   │ │ │ │ │ ├── headerinclude.html
   │ │ │ │ │ ├── htmldoctype.html
   │ │ │ │ │ ├── index.html
   │ │ │ │ │ ├── index_birthdays.html
   │ │ │ │ │ ├── index_birthdays_birthday.html
   │ │ │ │ │ ├── index_boardstats.html
   │ │ │ │ │ ├── index_logoutlink.html
   │ │ │ │ │ ├── index_stats.html
   │ │ │ │ │ ├── index_statspage.html
   │ │ │ │ │ ├── index_whosonline.html
   │ │ │ │ │ ├── index_whosonline_memberbit.html
   │ │ │ │ │ ├── loginbox.html
   │ │ │ │ │ ├── managegroup.html
   │ │ │ │ │ ├── managegroup_adduser.html
   │ │ │ │ │ ├── managegroup_inviteuser.html
   │ │ │ │ │ ├── managegroup_joinrequests.html
   │ │ │ │ │ ├── managegroup_joinrequests_request.html
   │ │ │ │ │ ├── managegroup_leaders.html
   │ │ │ │ │ ├── managegroup_leaders_bit.html
   │ │ │ │ │ ├── managegroup_no_users.html
   │ │ │ │ │ ├── managegroup_removeusers.html
   │ │ │ │ │ ├── managegroup_requestnote.html
   │ │ │ │ │ ├── managegroup_user.html
   │ │ │ │ │ ├── managegroup_user_checkbox.html
   │ │ │ │ │ ├── member_activate.html
   │ │ │ │ │ ├── member_coppa_form.html
   │ │ │ │ │ ├── member_emailuser.html
   │ │ │ │ │ ├── member_emailuser_guest.html
   │ │ │ │ │ ├── member_loggedin_notice.html
   │ │ │ │ │ ├── member_login.html
   │ │ │ │ │ ├── member_lostpw.html
   │ │ │ │ │ ├── member_no_referrals.html
   │ │ │ │ │ ├── member_profile.html
   │ │ │ │ │ ├── member_profile_addremove.html
   │ │ │ │ │ ├── member_profile_adminoptions.html
   │ │ │ │ │ ├── member_profile_adminoptions_manageban.html
   │ │ │ │ │ ├── member_profile_avatar.html
   │ │ │ │ │ ├── member_profile_away.html
   │ │ │ │ │ ├── member_profile_banned.html
   │ │ │ │ │ ├── member_profile_banned_remaining.html
   │ │ │ │ │ ├── member_profile_contact_details.html
   │ │ │ │ │ ├── member_profile_contact_fields_google.html
   │ │ │ │ │ ├── member_profile_contact_fields_skype.html
   │ │ │ │ │ ├── member_profile_customfields.html
   │ │ │ │ │ ├── member_profile_customfields_field.html
   │ │ │ │ │ ├── member_profile_customfields_field_multi.html
   │ │ │ │ │ ├── member_profile_customfields_field_multi_item.html
   │ │ │ │ │ ├── member_profile_email.html
   │ │ │ │ │ ├── member_profile_findposts.html
   │ │ │ │ │ ├── member_profile_findthreads.html
   │ │ │ │ │ ├── member_profile_groupimage.html
   │ │ │ │ │ ├── member_profile_modoptions.html
   │ │ │ │ │ ├── member_profile_modoptions_banuser.html
   │ │ │ │ │ ├── member_profile_modoptions_editnotes.html
   │ │ │ │ │ ├── member_profile_modoptions_editprofile.html
   │ │ │ │ │ ├── member_profile_modoptions_ipaddress.html
   │ │ │ │ │ ├── member_profile_modoptions_manageban.html
   │ │ │ │ │ ├── member_profile_modoptions_manageuser.html
   │ │ │ │ │ ├── member_profile_modoptions_purgespammer.html
   │ │ │ │ │ ├── member_profile_modoptions_viewnotes.html
   │ │ │ │ │ ├── member_profile_offline.html
   │ │ │ │ │ ├── member_profile_online.html
   │ │ │ │ │ ├── member_profile_pm.html
   │ │ │ │ │ ├── member_profile_referrals.html
   │ │ │ │ │ ├── member_profile_reputation.html
   │ │ │ │ │ ├── member_profile_reputation_vote.html
   │ │ │ │ │ ├── member_profile_signature.html
   │ │ │ │ │ ├── member_profile_userstar.html
   │ │ │ │ │ ├── member_profile_warn.html
   │ │ │ │ │ ├── member_profile_warninglevel.html
   │ │ │ │ │ ├── member_profile_warninglevel_link.html
   │ │ │ │ │ ├── member_profile_website.html
   │ │ │ │ │ ├── member_referral_row.html
   │ │ │ │ │ ├── member_referrals.html
   │ │ │ │ │ ├── member_referrals_link.html
   │ │ │ │ │ ├── member_referrals_popup.html
   │ │ │ │ │ ├── member_register.html
   │ │ │ │ │ ├── member_register_additionalfields.html
   │ │ │ │ │ ├── member_register_agreement.html
   │ │ │ │ │ ├── member_register_agreement_coppa.html
   │ │ │ │ │ ├── member_register_coppa.html
   │ │ │ │ │ ├── member_register_customfield.html
   │ │ │ │ │ ├── member_register_day.html
   │ │ │ │ │ ├── member_register_hiddencaptcha.html
   │ │ │ │ │ ├── member_register_language.html
   │ │ │ │ │ ├── member_register_password.html
   │ │ │ │ │ ├── member_register_question.html
   │ │ │ │ │ ├── member_register_question_refresh.html
   │ │ │ │ │ ├── member_register_referrer.html
   │ │ │ │ │ ├── member_register_regimage.html
   │ │ │ │ │ ├── member_register_regimage_cfturnstile.html
   │ │ │ │ │ ├── member_register_regimage_hcaptcha.html
   │ │ │ │ │ ├── member_register_regimage_hcaptcha_invisible.html
   │ │ │ │ │ ├── member_register_regimage_nocaptcha.html
   │ │ │ │ │ ├── member_register_regimage_recaptcha_invisible.html
   │ │ │ │ │ ├── member_register_requiredfields.html
   │ │ │ │ │ ├── member_register_stylebit.html
   │ │ │ │ │ ├── member_resendactivation.html
   │ │ │ │ │ ├── member_resetpassword.html
   │ │ │ │ │ ├── member_viewnotes.html
   │ │ │ │ │ ├── memberlist.html
   │ │ │ │ │ ├── memberlist_error.html
   │ │ │ │ │ ├── memberlist_orderarrow.html
   │ │ │ │ │ ├── memberlist_referrals.html
   │ │ │ │ │ ├── memberlist_referrals_bit.html
   │ │ │ │ │ ├── memberlist_referrals_option.html
   │ │ │ │ │ ├── memberlist_search.html
   │ │ │ │ │ ├── memberlist_search_contact_field.html
   │ │ │ │ │ ├── memberlist_user.html
   │ │ │ │ │ ├── memberlist_user_avatar.html
   │ │ │ │ │ ├── memberlist_user_groupimage.html
   │ │ │ │ │ ├── memberlist_user_userstar.html
   │ │ │ │ │ ├── misc_buddypopup.html
   │ │ │ │ │ ├── misc_buddypopup_user.html
   │ │ │ │ │ ├── misc_buddypopup_user_none.html
   │ │ │ │ │ ├── misc_buddypopup_user_offline.html
   │ │ │ │ │ ├── misc_buddypopup_user_online.html
   │ │ │ │ │ ├── misc_buddypopup_user_sendpm.html
   │ │ │ │ │ ├── misc_help.html
   │ │ │ │ │ ├── misc_help_helpdoc.html
   │ │ │ │ │ ├── misc_help_search.html
   │ │ │ │ │ ├── misc_help_section.html
   │ │ │ │ │ ├── misc_help_section_bit.html
   │ │ │ │ │ ├── misc_helpresults.html
   │ │ │ │ │ ├── misc_helpresults_bit.html
   │ │ │ │ │ ├── misc_helpresults_noresults.html
   │ │ │ │ │ ├── misc_rules_forum.html
   │ │ │ │ │ ├── misc_smilies.html
   │ │ │ │ │ ├── misc_smilies_no_smilies.html
   │ │ │ │ │ ├── misc_smilies_popup.html
   │ │ │ │ │ ├── misc_smilies_popup_empty.html
   │ │ │ │ │ ├── misc_smilies_popup_no_smilies.html
   │ │ │ │ │ ├── misc_smilies_popup_row.html
   │ │ │ │ │ ├── misc_smilies_popup_smilie.html
   │ │ │ │ │ ├── misc_smilies_smilie.html
   │ │ │ │ │ ├── misc_syndication.html
   │ │ │ │ │ ├── misc_syndication_feedurl.html
   │ │ │ │ │ ├── misc_syndication_forumlist.html
   │ │ │ │ │ ├── misc_syndication_forumlist_forum.html
   │ │ │ │ │ ├── misc_whoposted.html
   │ │ │ │ │ ├── misc_whoposted_page.html
   │ │ │ │ │ ├── misc_whoposted_poster.html
   │ │ │ │ │ ├── modal.html
   │ │ │ │ │ ├── modal_button.html
   │ │ │ │ │ ├── modcp.html
   │ │ │ │ │ ├── modcp_announcements.html
   │ │ │ │ │ ├── modcp_announcements_allowhtml.html
   │ │ │ │ │ ├── modcp_announcements_announcement.html
   │ │ │ │ │ ├── modcp_announcements_announcement_active.html
   │ │ │ │ │ ├── modcp_announcements_announcement_expired.html
   │ │ │ │ │ ├── modcp_announcements_announcement_global.html
   │ │ │ │ │ ├── modcp_announcements_day.html
   │ │ │ │ │ ├── modcp_announcements_delete.html
   │ │ │ │ │ ├── modcp_announcements_edit.html
   │ │ │ │ │ ├── modcp_announcements_forum.html
   │ │ │ │ │ ├── modcp_announcements_forum_nomod.html
   │ │ │ │ │ ├── modcp_announcements_global.html
   │ │ │ │ │ ├── modcp_announcements_month_end.html
   │ │ │ │ │ ├── modcp_announcements_month_start.html
   │ │ │ │ │ ├── modcp_announcements_new.html
   │ │ │ │ │ ├── modcp_awaitingattachments.html
   │ │ │ │ │ ├── modcp_awaitingmoderation.html
   │ │ │ │ │ ├── modcp_awaitingmoderation_none.html
   │ │ │ │ │ ├── modcp_awaitingposts.html
   │ │ │ │ │ ├── modcp_awaitingthreads.html
   │ │ │ │ │ ├── modcp_banning.html
   │ │ │ │ │ ├── modcp_banning_ban.html
   │ │ │ │ │ ├── modcp_banning_edit.html
   │ │ │ │ │ ├── modcp_banning_nobanned.html
   │ │ │ │ │ ├── modcp_banning_remaining.html
   │ │ │ │ │ ├── modcp_banuser.html
   │ │ │ │ │ ├── modcp_banuser_addusername.html
   │ │ │ │ │ ├── modcp_banuser_bangroups.html
   │ │ │ │ │ ├── modcp_banuser_bangroups_group.html
   │ │ │ │ │ ├── modcp_banuser_bangroups_hidden.html
   │ │ │ │ │ ├── modcp_banuser_editusername.html
   │ │ │ │ │ ├── modcp_banuser_lift.html
   │ │ │ │ │ ├── modcp_banuser_liftlist.html
   │ │ │ │ │ ├── modcp_editprofile.html
   │ │ │ │ │ ├── modcp_editprofile_away.html
   │ │ │ │ │ ├── modcp_editprofile_select.html
   │ │ │ │ │ ├── modcp_editprofile_select_option.html
   │ │ │ │ │ ├── modcp_editprofile_signature.html
   │ │ │ │ │ ├── modcp_editprofile_suspensions_info.html
   │ │ │ │ │ ├── modcp_finduser.html
   │ │ │ │ │ ├── modcp_finduser_noresults.html
   │ │ │ │ │ ├── modcp_finduser_user.html
   │ │ │ │ │ ├── modcp_ipsearch.html
   │ │ │ │ │ ├── modcp_ipsearch_misc_info.html
   │ │ │ │ │ ├── modcp_ipsearch_noresults.html
   │ │ │ │ │ ├── modcp_ipsearch_result.html
   │ │ │ │ │ ├── modcp_ipsearch_result_lastip.html
   │ │ │ │ │ ├── modcp_ipsearch_result_post.html
   │ │ │ │ │ ├── modcp_ipsearch_result_regip.html
   │ │ │ │ │ ├── modcp_ipsearch_results.html
   │ │ │ │ │ ├── modcp_ipsearch_results_information.html
   │ │ │ │ │ ├── modcp_lastattachment.html
   │ │ │ │ │ ├── modcp_lastpost.html
   │ │ │ │ │ ├── modcp_lastthread.html
   │ │ │ │ │ ├── modcp_latestfivemodactions.html
   │ │ │ │ │ ├── modcp_modlogs.html
   │ │ │ │ │ ├── modcp_modlogs_multipage.html
   │ │ │ │ │ ├── modcp_modlogs_nologs.html
   │ │ │ │ │ ├── modcp_modlogs_noresults.html
   │ │ │ │ │ ├── modcp_modlogs_result.html
   │ │ │ │ │ ├── modcp_modlogs_result_announcement.html
   │ │ │ │ │ ├── modcp_modlogs_result_forum.html
   │ │ │ │ │ ├── modcp_modlogs_result_post.html
   │ │ │ │ │ ├── modcp_modlogs_result_thread.html
   │ │ │ │ │ ├── modcp_modlogs_user.html
   │ │ │ │ │ ├── modcp_modqueue_attachment_link.html
   │ │ │ │ │ ├── modcp_modqueue_attachments.html
   │ │ │ │ │ ├── modcp_modqueue_attachments_attachment.html
   │ │ │ │ │ ├── modcp_modqueue_attachments_empty.html
   │ │ │ │ │ ├── modcp_modqueue_empty.html
   │ │ │ │ │ ├── modcp_modqueue_link_forum.html
   │ │ │ │ │ ├── modcp_modqueue_link_thread.html
   │ │ │ │ │ ├── modcp_modqueue_masscontrols.html
   │ │ │ │ │ ├── modcp_modqueue_post_link.html
   │ │ │ │ │ ├── modcp_modqueue_posts.html
   │ │ │ │ │ ├── modcp_modqueue_posts_empty.html
   │ │ │ │ │ ├── modcp_modqueue_posts_post.html
   │ │ │ │ │ ├── modcp_modqueue_thread_link.html
   │ │ │ │ │ ├── modcp_modqueue_threads.html
   │ │ │ │ │ ├── modcp_modqueue_threads_empty.html
   │ │ │ │ │ ├── modcp_modqueue_threads_thread.html
   │ │ │ │ │ ├── modcp_nav.html
   │ │ │ │ │ ├── modcp_nav_announcements.html
   │ │ │ │ │ ├── modcp_nav_banning.html
   │ │ │ │ │ ├── modcp_nav_editprofile.html
   │ │ │ │ │ ├── modcp_nav_forums_posts.html
   │ │ │ │ │ ├── modcp_nav_ipsearch.html
   │ │ │ │ │ ├── modcp_nav_modlogs.html
   │ │ │ │ │ ├── modcp_nav_modqueue.html
   │ │ │ │ │ ├── modcp_nav_reportcenter.html
   │ │ │ │ │ ├── modcp_nav_users.html
   │ │ │ │ │ ├── modcp_nav_warninglogs.html
   │ │ │ │ │ ├── modcp_no_announcements_forum.html
   │ │ │ │ │ ├── modcp_no_announcements_global.html
   │ │ │ │ │ ├── modcp_nobanned.html
   │ │ │ │ │ ├── modcp_reports.html
   │ │ │ │ │ ├── modcp_reports_allnoreports.html
   │ │ │ │ │ ├── modcp_reports_allreport.html
   │ │ │ │ │ ├── modcp_reports_allreports.html
   │ │ │ │ │ ├── modcp_reports_multipage.html
   │ │ │ │ │ ├── modcp_reports_noreports.html
   │ │ │ │ │ ├── modcp_reports_report.html
   │ │ │ │ │ ├── modcp_reports_report_comment.html
   │ │ │ │ │ ├── modcp_reports_report_comment_extra.html
   │ │ │ │ │ ├── modcp_reports_selectall.html
   │ │ │ │ │ ├── modcp_warninglogs.html
   │ │ │ │ │ ├── modcp_warninglogs_nologs.html
   │ │ │ │ │ ├── modcp_warninglogs_warning.html
   │ │ │ │ │ ├── modcp_warninglogs_warning_revoked.html
   │ │ │ │ │ ├── moderation_confirmation.html
   │ │ │ │ │ ├── moderation_delayedmodaction_error.html
   │ │ │ │ │ ├── moderation_delayedmodaction_notes.html
   │ │ │ │ │ ├── moderation_delayedmodaction_notes_forum.html
   │ │ │ │ │ ├── moderation_delayedmodaction_notes_merge.html
   │ │ │ │ │ ├── moderation_delayedmodaction_notes_new_forum.html
   │ │ │ │ │ ├── moderation_delayedmodaction_notes_redirect.html
   │ │ │ │ │ ├── moderation_delayedmodaction_notes_thread_multiple.html
   │ │ │ │ │ ├── moderation_delayedmodaction_notes_thread_single.html
   │ │ │ │ │ ├── moderation_delayedmoderation.html
   │ │ │ │ │ ├── moderation_delayedmoderation_approve.html
   │ │ │ │ │ ├── moderation_delayedmoderation_custommodtool.html
   │ │ │ │ │ ├── moderation_delayedmoderation_date_day.html
   │ │ │ │ │ ├── moderation_delayedmoderation_date_month.html
   │ │ │ │ │ ├── moderation_delayedmoderation_delete.html
   │ │ │ │ │ ├── moderation_delayedmoderation_merge.html
   │ │ │ │ │ ├── moderation_delayedmoderation_move.html
   │ │ │ │ │ ├── moderation_delayedmoderation_openclose.html
   │ │ │ │ │ ├── moderation_delayedmoderation_softdeleterestore.html
   │ │ │ │ │ ├── moderation_delayedmoderation_stick.html
   │ │ │ │ │ ├── moderation_delayedmoderation_thread.html
   │ │ │ │ │ ├── moderation_deletepoll.html
   │ │ │ │ │ ├── moderation_deletethread.html
   │ │ │ │ │ ├── moderation_getip.html
   │ │ │ │ │ ├── moderation_getip_modal.html
   │ │ │ │ │ ├── moderation_getip_modoptions.html
   │ │ │ │ │ ├── moderation_getpmip.html
   │ │ │ │ │ ├── moderation_getpmip_modal.html
   │ │ │ │ │ ├── moderation_inline_deleteposts.html
   │ │ │ │ │ ├── moderation_inline_deletethreads.html
   │ │ │ │ │ ├── moderation_inline_mergeposts.html
   │ │ │ │ │ ├── moderation_inline_moveposts.html
   │ │ │ │ │ ├── moderation_inline_movethreads.html
   │ │ │ │ │ ├── moderation_inline_splitposts.html
   │ │ │ │ │ ├── moderation_merge.html
   │ │ │ │ │ ├── moderation_mergeposts_post.html
   │ │ │ │ │ ├── moderation_move.html
   │ │ │ │ │ ├── moderation_purgespammer.html
   │ │ │ │ │ ├── moderation_split.html
   │ │ │ │ │ ├── moderation_split_post.html
   │ │ │ │ │ ├── moderation_threadnotes.html
   │ │ │ │ │ ├── moderation_threadnotes_delayedmodaction.html
   │ │ │ │ │ ├── moderation_threadnotes_modaction.html
   │ │ │ │ │ ├── moderation_threadnotes_modaction_error.html
   │ │ │ │ │ ├── moderation_threadnotes_modaction_forum.html
   │ │ │ │ │ ├── moderation_threadnotes_modaction_post.html
   │ │ │ │ │ ├── moderation_threadnotes_modaction_thread.html
   │ │ │ │ │ ├── moderation_viewthreadnotes.html
   │ │ │ │ │ ├── multipage.html
   │ │ │ │ │ ├── multipage_breadcrumb.html
   │ │ │ │ │ ├── multipage_end.html
   │ │ │ │ │ ├── multipage_jump_page.html
   │ │ │ │ │ ├── multipage_nextpage.html
   │ │ │ │ │ ├── multipage_page.html
   │ │ │ │ │ ├── multipage_page_current.html
   │ │ │ │ │ ├── multipage_page_link_current.html
   │ │ │ │ │ ├── multipage_prevpage.html
   │ │ │ │ │ ├── multipage_start.html
   │ │ │ │ │ ├── mycode_code.html
   │ │ │ │ │ ├── mycode_email.html
   │ │ │ │ │ ├── mycode_img.html
   │ │ │ │ │ ├── mycode_php.html
   │ │ │ │ │ ├── mycode_quote_post.html
   │ │ │ │ │ ├── mycode_size_int.html
   │ │ │ │ │ ├── mycode_url.html
   │ │ │ │ │ ├── nav.html
   │ │ │ │ │ ├── nav_bit.html
   │ │ │ │ │ ├── nav_bit_active.html
   │ │ │ │ │ ├── nav_dropdown.html
   │ │ │ │ │ ├── nav_sep.html
   │ │ │ │ │ ├── nav_sep_active.html
   │ │ │ │ │ ├── newreply.html
   │ │ │ │ │ ├── newreply_disablesmilies.html
   │ │ │ │ │ ├── newreply_draftinput.html
   │ │ │ │ │ ├── newreply_modoptions.html
   │ │ │ │ │ ├── newreply_modoptions_close.html
   │ │ │ │ │ ├── newreply_modoptions_stick.html
   │ │ │ │ │ ├── newreply_multiquote_external.html
   │ │ │ │ │ ├── newreply_postoptions.html
   │ │ │ │ │ ├── newreply_signature.html
   │ │ │ │ │ ├── newreply_threadreview.html
   │ │ │ │ │ ├── newreply_threadreview_more.html
   │ │ │ │ │ ├── newreply_threadreview_post.html
   │ │ │ │ │ ├── newthread.html
   │ │ │ │ │ ├── newthread_disablesmilies.html
   │ │ │ │ │ ├── newthread_draftinput.html
   │ │ │ │ │ ├── newthread_multiquote_external.html
   │ │ │ │ │ ├── newthread_postoptions.html
   │ │ │ │ │ ├── newthread_postpoll.html
   │ │ │ │ │ ├── newthread_signature.html
   │ │ │ │ │ ├── online.html
   │ │ │ │ │ ├── online_refresh.html
   │ │ │ │ │ ├── online_row.html
   │ │ │ │ │ ├── online_row_ip.html
   │ │ │ │ │ ├── online_row_ip_lookup.html
   │ │ │ │ │ ├── online_today.html
   │ │ │ │ │ ├── online_today_row.html
   │ │ │ │ │ ├── php_warnings.html
   │ │ │ │ │ ├── polls_editpoll.html
   │ │ │ │ │ ├── polls_editpoll_option.html
   │ │ │ │ │ ├── polls_newpoll.html
   │ │ │ │ │ ├── polls_newpoll_option.html
   │ │ │ │ │ ├── polls_showresults.html
   │ │ │ │ │ ├── polls_showresults_resultbit.html
   │ │ │ │ │ ├── portal.html
   │ │ │ │ │ ├── portal_announcement.html
   │ │ │ │ │ ├── portal_announcement_avatar.html
   │ │ │ │ │ ├── portal_announcement_icon.html
   │ │ │ │ │ ├── portal_announcement_numcomments.html
   │ │ │ │ │ ├── portal_announcement_numcomments_no.html
   │ │ │ │ │ ├── portal_announcement_send_item.html
   │ │ │ │ │ ├── portal_latestthreads.html
   │ │ │ │ │ ├── portal_latestthreads_thread.html
   │ │ │ │ │ ├── portal_pms.html
   │ │ │ │ │ ├── portal_search.html
   │ │ │ │ │ ├── portal_stats.html
   │ │ │ │ │ ├── portal_stats_nobody.html
   │ │ │ │ │ ├── portal_welcome.html
   │ │ │ │ │ ├── portal_welcome_guesttext.html
   │ │ │ │ │ ├── portal_welcome_membertext.html
   │ │ │ │ │ ├── portal_whosonline.html
   │ │ │ │ │ ├── portal_whosonline_memberbit.html
   │ │ │ │ │ ├── post_attachments.html
   │ │ │ │ │ ├── post_attachments_add.html
   │ │ │ │ │ ├── post_attachments_attachment.html
   │ │ │ │ │ ├── post_attachments_attachment_mod_approve.html
   │ │ │ │ │ ├── post_attachments_attachment_mod_unapprove.html
   │ │ │ │ │ ├── post_attachments_attachment_postinsert.html
   │ │ │ │ │ ├── post_attachments_attachment_remove.html
   │ │ │ │ │ ├── post_attachments_attachment_unapproved.html
   │ │ │ │ │ ├── post_attachments_new.html
   │ │ │ │ │ ├── post_attachments_update.html
   │ │ │ │ │ ├── post_attachments_viewlink.html
   │ │ │ │ │ ├── post_captcha.html
   │ │ │ │ │ ├── post_captcha_cfturnstile.html
   │ │ │ │ │ ├── post_captcha_hcaptcha.html
   │ │ │ │ │ ├── post_captcha_hcaptcha_invisible.html
   │ │ │ │ │ ├── post_captcha_hidden.html
   │ │ │ │ │ ├── post_captcha_nocaptcha.html
   │ │ │ │ │ ├── post_captcha_recaptcha_invisible.html
   │ │ │ │ │ ├── post_javascript.html
   │ │ │ │ │ ├── post_prefixselect_multiple.html
   │ │ │ │ │ ├── post_prefixselect_prefix.html
   │ │ │ │ │ ├── post_prefixselect_single.html
   │ │ │ │ │ ├── post_savedraftbutton.html
   │ │ │ │ │ ├── post_subscription_method.html
   │ │ │ │ │ ├── postbit.html
   │ │ │ │ │ ├── postbit_attachments.html
   │ │ │ │ │ ├── postbit_attachments_attachment.html
   │ │ │ │ │ ├── postbit_attachments_attachment_unapproved.html
   │ │ │ │ │ ├── postbit_attachments_images.html
   │ │ │ │ │ ├── postbit_attachments_images_image.html
   │ │ │ │ │ ├── postbit_attachments_thumbnails.html
   │ │ │ │ │ ├── postbit_attachments_thumbnails_thumbnail.html
   │ │ │ │ │ ├── postbit_author_guest.html
   │ │ │ │ │ ├── postbit_author_user.html
   │ │ │ │ │ ├── postbit_avatar.html
   │ │ │ │ │ ├── postbit_away.html
   │ │ │ │ │ ├── postbit_classic.html
   │ │ │ │ │ ├── postbit_delete_pm.html
   │ │ │ │ │ ├── postbit_deleted.html
   │ │ │ │ │ ├── postbit_deleted_member.html
   │ │ │ │ │ ├── postbit_edit.html
   │ │ │ │ │ ├── postbit_editedby.html
   │ │ │ │ │ ├── postbit_editedby_editreason.html
   │ │ │ │ │ ├── postbit_editreason.html
   │ │ │ │ │ ├── postbit_email.html
   │ │ │ │ │ ├── postbit_find.html
   │ │ │ │ │ ├── postbit_forward_pm.html
   │ │ │ │ │ ├── postbit_gotopost.html
   │ │ │ │ │ ├── postbit_groupimage.html
   │ │ │ │ │ ├── postbit_icon.html
   │ │ │ │ │ ├── postbit_ignored.html
   │ │ │ │ │ ├── postbit_inlinecheck.html
   │ │ │ │ │ ├── postbit_iplogged_hiden.html
   │ │ │ │ │ ├── postbit_iplogged_show.html
   │ │ │ │ │ ├── postbit_multiquote.html
   │ │ │ │ │ ├── postbit_offline.html
   │ │ │ │ │ ├── postbit_online.html
   │ │ │ │ │ ├── postbit_pm.html
   │ │ │ │ │ ├── postbit_posturl.html
   │ │ │ │ │ ├── postbit_profilefield.html
   │ │ │ │ │ ├── postbit_profilefield_multiselect.html
   │ │ │ │ │ ├── postbit_profilefield_multiselect_value.html
   │ │ │ │ │ ├── postbit_purgespammer.html
   │ │ │ │ │ ├── postbit_quickdelete.html
   │ │ │ │ │ ├── postbit_quickrestore.html
   │ │ │ │ │ ├── postbit_quote.html
   │ │ │ │ │ ├── postbit_rep_button.html
   │ │ │ │ │ ├── postbit_reply_pm.html
   │ │ │ │ │ ├── postbit_replyall_pm.html
   │ │ │ │ │ ├── postbit_report.html
   │ │ │ │ │ ├── postbit_reputation.html
   │ │ │ │ │ ├── postbit_reputation_formatted.html
   │ │ │ │ │ ├── postbit_reputation_formatted_link.html
   │ │ │ │ │ ├── postbit_signature.html
   │ │ │ │ │ ├── postbit_status.html
   │ │ │ │ │ ├── postbit_userstar.html
   │ │ │ │ │ ├── postbit_warn.html
   │ │ │ │ │ ├── postbit_warninglevel.html
   │ │ │ │ │ ├── postbit_warninglevel_formatted.html
   │ │ │ │ │ ├── postbit_www.html
   │ │ │ │ │ ├── posticons.html
   │ │ │ │ │ ├── posticons_icon.html
   │ │ │ │ │ ├── previewpost.html
   │ │ │ │ │ ├── printthread.html
   │ │ │ │ │ ├── printthread_multipage.html
   │ │ │ │ │ ├── printthread_multipage_page.html
   │ │ │ │ │ ├── printthread_multipage_page_current.html
   │ │ │ │ │ ├── printthread_nav.html
   │ │ │ │ │ ├── printthread_post.html
   │ │ │ │ │ ├── private.html
   │ │ │ │ │ ├── private_advanced_search.html
   │ │ │ │ │ ├── private_advanced_search_folders.html
   │ │ │ │ │ ├── private_archive.html
   │ │ │ │ │ ├── private_archive_csv.html
   │ │ │ │ │ ├── private_archive_csv_message.html
   │ │ │ │ │ ├── private_archive_folders.html
   │ │ │ │ │ ├── private_archive_folders_folder.html
   │ │ │ │ │ ├── private_archive_html.html
   │ │ │ │ │ ├── private_archive_html_folderhead.html
   │ │ │ │ │ ├── private_archive_html_message.html
   │ │ │ │ │ ├── private_archive_txt.html
   │ │ │ │ │ ├── private_archive_txt_folderhead.html
   │ │ │ │ │ ├── private_archive_txt_message.html
   │ │ │ │ │ ├── private_composelink.html
   │ │ │ │ │ ├── private_empty.html
   │ │ │ │ │ ├── private_empty_folder.html
   │ │ │ │ │ ├── private_emptyexportlink.html
   │ │ │ │ │ ├── private_folders.html
   │ │ │ │ │ ├── private_folders_folder.html
   │ │ │ │ │ ├── private_folders_folder_unremovable.html
   │ │ │ │ │ ├── private_jump_folders.html
   │ │ │ │ │ ├── private_jump_folders_folder.html
   │ │ │ │ │ ├── private_limitwarning.html
   │ │ │ │ │ ├── private_messagebit.html
   │ │ │ │ │ ├── private_messagebit_denyreceipt.html
   │ │ │ │ │ ├── private_messagebit_icon.html
   │ │ │ │ │ ├── private_messagebit_sep.html
   │ │ │ │ │ ├── private_move.html
   │ │ │ │ │ ├── private_multiple_recipients.html
   │ │ │ │ │ ├── private_multiple_recipients_bcc.html
   │ │ │ │ │ ├── private_multiple_recipients_user.html
   │ │ │ │ │ ├── private_nomessages.html
   │ │ │ │ │ ├── private_orderarrow.html
   │ │ │ │ │ ├── private_pmspace.html
   │ │ │ │ │ ├── private_quickreply.html
   │ │ │ │ │ ├── private_read.html
   │ │ │ │ │ ├── private_read_action.html
   │ │ │ │ │ ├── private_read_bcc.html
   │ │ │ │ │ ├── private_read_to.html
   │ │ │ │ │ ├── private_search_messagebit.html
   │ │ │ │ │ ├── private_search_results.html
   │ │ │ │ │ ├── private_search_results_nomessages.html
   │ │ │ │ │ ├── private_send.html
   │ │ │ │ │ ├── private_send_autocomplete.html
   │ │ │ │ │ ├── private_send_buddyselect.html
   │ │ │ │ │ ├── private_send_tracking.html
   │ │ │ │ │ ├── private_tracking.html
   │ │ │ │ │ ├── private_tracking_nomessage.html
   │ │ │ │ │ ├── private_tracking_readmessage.html
   │ │ │ │ │ ├── private_tracking_readmessage_stop.html
   │ │ │ │ │ ├── private_tracking_unreadmessage.html
   │ │ │ │ │ ├── private_tracking_unreadmessage_stop.html
   │ │ │ │ │ ├── redirect.html
   │ │ │ │ │ ├── report.html
   │ │ │ │ │ ├── report_duplicate.html
   │ │ │ │ │ ├── report_error.html
   │ │ │ │ │ ├── report_error_nomodal.html
   │ │ │ │ │ ├── report_reason.html
   │ │ │ │ │ ├── report_reasons.html
   │ │ │ │ │ ├── report_thanks.html
   │ │ │ │ │ ├── reputation.html
   │ │ │ │ │ ├── reputation_add.html
   │ │ │ │ │ ├── reputation_add_delete.html
   │ │ │ │ │ ├── reputation_add_error.html
   │ │ │ │ │ ├── reputation_add_error_nomodal.html
   │ │ │ │ │ ├── reputation_add_negative.html
   │ │ │ │ │ ├── reputation_add_neutral.html
   │ │ │ │ │ ├── reputation_add_positive.html
   │ │ │ │ │ ├── reputation_added.html
   │ │ │ │ │ ├── reputation_addlink.html
   │ │ │ │ │ ├── reputation_deleted.html
   │ │ │ │ │ ├── reputation_no_votes.html
   │ │ │ │ │ ├── reputation_vote.html
   │ │ │ │ │ ├── reputation_vote_delete.html
   │ │ │ │ │ ├── reputation_vote_report.html
   │ │ │ │ │ ├── search.html
   │ │ │ │ │ ├── search_forumlist.html
   │ │ │ │ │ ├── search_forumlist_forum.html
   │ │ │ │ │ ├── search_moderator_options.html
   │ │ │ │ │ ├── search_orderarrow.html
   │ │ │ │ │ ├── search_posts_inlinemoderation_selectall.html
   │ │ │ │ │ ├── search_results_icon.html
   │ │ │ │ │ ├── search_results_inlinemodcol.html
   │ │ │ │ │ ├── search_results_inlinemodcol_empty.html
   │ │ │ │ │ ├── search_results_posts.html
   │ │ │ │ │ ├── search_results_posts_forumlink.html
   │ │ │ │ │ ├── search_results_posts_inlinecheck.html
   │ │ │ │ │ ├── search_results_posts_inlinemoderation.html
   │ │ │ │ │ ├── search_results_posts_inlinemoderation_custom.html
   │ │ │ │ │ ├── search_results_posts_inlinemoderation_custom_tool.html
   │ │ │ │ │ ├── search_results_posts_nocheck.html
   │ │ │ │ │ ├── search_results_posts_post.html
   │ │ │ │ │ ├── search_results_threads.html
   │ │ │ │ │ ├── search_results_threads_forumlink.html
   │ │ │ │ │ ├── search_results_threads_inlinecheck.html
   │ │ │ │ │ ├── search_results_threads_inlinemoderation.html
   │ │ │ │ │ ├── search_results_threads_inlinemoderation_custom.html
   │ │ │ │ │ ├── search_results_threads_inlinemoderation_custom_tool.html
   │ │ │ │ │ ├── search_results_threads_nocheck.html
   │ │ │ │ │ ├── search_results_threads_thread.html
   │ │ │ │ │ ├── search_threads_inlinemoderation_selectall.html
   │ │ │ │ │ ├── sendthread.html
   │ │ │ │ │ ├── sendthread_fromemail.html
   │ │ │ │ │ ├── showteam.html
   │ │ │ │ │ ├── showteam_moderators.html
   │ │ │ │ │ ├── showteam_moderators_forum.html
   │ │ │ │ │ ├── showteam_moderators_mod.html
   │ │ │ │ │ ├── showteam_usergroup.html
   │ │ │ │ │ ├── showteam_usergroup_user.html
   │ │ │ │ │ ├── showthread.html
   │ │ │ │ │ ├── showthread_add_poll.html
   │ │ │ │ │ ├── showthread_classic_header.html
   │ │ │ │ │ ├── showthread_inlinemoderation.html
   │ │ │ │ │ ├── showthread_inlinemoderation_approve.html
   │ │ │ │ │ ├── showthread_inlinemoderation_custom.html
   │ │ │ │ │ ├── showthread_inlinemoderation_custom_tool.html
   │ │ │ │ │ ├── showthread_inlinemoderation_delete.html
   │ │ │ │ │ ├── showthread_inlinemoderation_manage.html
   │ │ │ │ │ ├── showthread_inlinemoderation_restore.html
   │ │ │ │ │ ├── showthread_inlinemoderation_softdelete.html
   │ │ │ │ │ ├── showthread_inlinemoderation_standard.html
   │ │ │ │ │ ├── showthread_moderationoptions.html
   │ │ │ │ │ ├── showthread_moderationoptions_approve.html
   │ │ │ │ │ ├── showthread_moderationoptions_custom.html
   │ │ │ │ │ ├── showthread_moderationoptions_custom_tool.html
   │ │ │ │ │ ├── showthread_moderationoptions_delete.html
   │ │ │ │ │ ├── showthread_moderationoptions_deletepoll.html
   │ │ │ │ │ ├── showthread_moderationoptions_manage.html
   │ │ │ │ │ ├── showthread_moderationoptions_openclose.html
   │ │ │ │ │ ├── showthread_moderationoptions_restore.html
   │ │ │ │ │ ├── showthread_moderationoptions_softdelete.html
   │ │ │ │ │ ├── showthread_moderationoptions_standard.html
   │ │ │ │ │ ├── showthread_moderationoptions_stickunstick.html
   │ │ │ │ │ ├── showthread_moderationoptions_threadnotes.html
   │ │ │ │ │ ├── showthread_moderationoptions_unapprove.html
   │ │ │ │ │ ├── showthread_newreply.html
   │ │ │ │ │ ├── showthread_newreply_closed.html
   │ │ │ │ │ ├── showthread_newthread.html
   │ │ │ │ │ ├── showthread_poll.html
   │ │ │ │ │ ├── showthread_poll_editpoll.html
   │ │ │ │ │ ├── showthread_poll_option.html
   │ │ │ │ │ ├── showthread_poll_option_multiple.html
   │ │ │ │ │ ├── showthread_poll_resultbit.html
   │ │ │ │ │ ├── showthread_poll_results.html
   │ │ │ │ │ ├── showthread_poll_undovote.html
   │ │ │ │ │ ├── showthread_printthread.html
   │ │ │ │ │ ├── showthread_quickreply.html
   │ │ │ │ │ ├── showthread_quickreply_options_close.html
   │ │ │ │ │ ├── showthread_quickreply_options_signature.html
   │ │ │ │ │ ├── showthread_quickreply_options_stick.html
   │ │ │ │ │ ├── showthread_ratethread.html
   │ │ │ │ │ ├── showthread_search.html
   │ │ │ │ │ ├── showthread_send_thread.html
   │ │ │ │ │ ├── showthread_similarthreads.html
   │ │ │ │ │ ├── showthread_similarthreads_bit.html
   │ │ │ │ │ ├── showthread_subscription.html
   │ │ │ │ │ ├── showthread_threaded_bit.html
   │ │ │ │ │ ├── showthread_threaded_bitactive.html
   │ │ │ │ │ ├── showthread_threadedbox.html
   │ │ │ │ │ ├── showthread_threadnotes.html
   │ │ │ │ │ ├── showthread_threadnotes_viewnotes.html
   │ │ │ │ │ ├── showthread_threadnoteslink.html
   │ │ │ │ │ ├── showthread_usersbrowsing.html
   │ │ │ │ │ ├── showthread_usersbrowsing_user.html
   │ │ │ │ │ ├── smilie.html
   │ │ │ │ │ ├── smilieinsert.html
   │ │ │ │ │ ├── smilieinsert_getmore.html
   │ │ │ │ │ ├── smilieinsert_row.html
   │ │ │ │ │ ├── smilieinsert_row_empty.html
   │ │ │ │ │ ├── smilieinsert_smilie.html
   │ │ │ │ │ ├── stats.html
   │ │ │ │ │ ├── stats_thread.html
   │ │ │ │ │ ├── stats_topforum.html
   │ │ │ │ │ ├── task_image.html
   │ │ │ │ │ ├── usercp.html
   │ │ │ │ │ ├── usercp_addsubscription_thread.html
   │ │ │ │ │ ├── usercp_attachments.html
   │ │ │ │ │ ├── usercp_attachments_attachment.html
   │ │ │ │ │ ├── usercp_attachments_none.html
   │ │ │ │ │ ├── usercp_avatar.html
   │ │ │ │ │ ├── usercp_avatar_auto_resize_auto.html
   │ │ │ │ │ ├── usercp_avatar_auto_resize_user.html
   │ │ │ │ │ ├── usercp_avatar_current.html
   │ │ │ │ │ ├── usercp_avatar_remote.html
   │ │ │ │ │ ├── usercp_avatar_remove.html
   │ │ │ │ │ ├── usercp_avatar_upload.html
   │ │ │ │ │ ├── usercp_changename.html
   │ │ │ │ │ ├── usercp_currentavatar.html
   │ │ │ │ │ ├── usercp_drafts.html
   │ │ │ │ │ ├── usercp_drafts_draft.html
   │ │ │ │ │ ├── usercp_drafts_draft_forum.html
   │ │ │ │ │ ├── usercp_drafts_draft_thread.html
   │ │ │ │ │ ├── usercp_drafts_none.html
   │ │ │ │ │ ├── usercp_editlists.html
   │ │ │ │ │ ├── usercp_editlists_no_buddies.html
   │ │ │ │ │ ├── usercp_editlists_no_ignored.html
   │ │ │ │ │ ├── usercp_editlists_no_requests.html
   │ │ │ │ │ ├── usercp_editlists_received_request.html
   │ │ │ │ │ ├── usercp_editlists_received_requests.html
   │ │ │ │ │ ├── usercp_editlists_sent_request.html
   │ │ │ │ │ ├── usercp_editlists_sent_requests.html
   │ │ │ │ │ ├── usercp_editlists_user.html
   │ │ │ │ │ ├── usercp_editsig.html
   │ │ │ │ │ ├── usercp_editsig_current.html
   │ │ │ │ │ ├── usercp_editsig_preview.html
   │ │ │ │ │ ├── usercp_editsig_suspended.html
   │ │ │ │ │ ├── usercp_email.html
   │ │ │ │ │ ├── usercp_forumsubscriptions.html
   │ │ │ │ │ ├── usercp_forumsubscriptions_forum.html
   │ │ │ │ │ ├── usercp_forumsubscriptions_none.html
   │ │ │ │ │ ├── usercp_latest_subscribed.html
   │ │ │ │ │ ├── usercp_latest_subscribed_threads.html
   │ │ │ │ │ ├── usercp_latest_threads.html
   │ │ │ │ │ ├── usercp_latest_threads_threads.html
   │ │ │ │ │ ├── usercp_nav.html
   │ │ │ │ │ ├── usercp_nav_attachments.html
   │ │ │ │ │ ├── usercp_nav_changename.html
   │ │ │ │ │ ├── usercp_nav_editsignature.html
   │ │ │ │ │ ├── usercp_nav_home.html
   │ │ │ │ │ ├── usercp_nav_messenger.html
   │ │ │ │ │ ├── usercp_nav_messenger_compose.html
   │ │ │ │ │ ├── usercp_nav_messenger_folder.html
   │ │ │ │ │ ├── usercp_nav_messenger_tracking.html
   │ │ │ │ │ ├── usercp_nav_misc.html
   │ │ │ │ │ ├── usercp_nav_profile.html
   │ │ │ │ │ ├── usercp_notepad.html
   │ │ │ │ │ ├── usercp_options.html
   │ │ │ │ │ ├── usercp_options_date_format.html
   │ │ │ │ │ ├── usercp_options_invisible.html
   │ │ │ │ │ ├── usercp_options_language.html
   │ │ │ │ │ ├── usercp_options_language_option.html
   │ │ │ │ │ ├── usercp_options_pms.html
   │ │ │ │ │ ├── usercp_options_pms_from_buddys.html
   │ │ │ │ │ ├── usercp_options_pppselect.html
   │ │ │ │ │ ├── usercp_options_pppselect_option.html
   │ │ │ │ │ ├── usercp_options_quick_reply.html
   │ │ │ │ │ ├── usercp_options_style.html
   │ │ │ │ │ ├── usercp_options_time_format.html
   │ │ │ │ │ ├── usercp_options_timezone.html
   │ │ │ │ │ ├── usercp_options_timezone_option.html
   │ │ │ │ │ ├── usercp_options_tppselect.html
   │ │ │ │ │ ├── usercp_options_tppselect_option.html
   │ │ │ │ │ ├── usercp_password.html
   │ │ │ │ │ ├── usercp_profile.html
   │ │ │ │ │ ├── usercp_profile_away.html
   │ │ │ │ │ ├── usercp_profile_contact_fields.html
   │ │ │ │ │ ├── usercp_profile_contact_fields_field.html
   │ │ │ │ │ ├── usercp_profile_customfield.html
   │ │ │ │ │ ├── usercp_profile_customtitle.html
   │ │ │ │ │ ├── usercp_profile_customtitle_currentcustom.html
   │ │ │ │ │ ├── usercp_profile_customtitle_reverttitle.html
   │ │ │ │ │ ├── usercp_profile_day.html
   │ │ │ │ │ ├── usercp_profile_profilefields.html
   │ │ │ │ │ ├── usercp_profile_profilefields_checkbox.html
   │ │ │ │ │ ├── usercp_profile_profilefields_multiselect.html
   │ │ │ │ │ ├── usercp_profile_profilefields_radio.html
   │ │ │ │ │ ├── usercp_profile_profilefields_select.html
   │ │ │ │ │ ├── usercp_profile_profilefields_select_option.html
   │ │ │ │ │ ├── usercp_profile_profilefields_text.html
   │ │ │ │ │ ├── usercp_profile_profilefields_textarea.html
   │ │ │ │ │ ├── usercp_profile_website.html
   │ │ │ │ │ ├── usercp_referrals.html
   │ │ │ │ │ ├── usercp_removesubscription_forum.html
   │ │ │ │ │ ├── usercp_removesubscription_thread.html
   │ │ │ │ │ ├── usercp_reputation.html
   │ │ │ │ │ ├── usercp_resendactivation.html
   │ │ │ │ │ ├── usercp_subscriptions.html
   │ │ │ │ │ ├── usercp_subscriptions_none.html
   │ │ │ │ │ ├── usercp_subscriptions_remove.html
   │ │ │ │ │ ├── usercp_subscriptions_thread.html
   │ │ │ │ │ ├── usercp_subscriptions_thread_icon.html
   │ │ │ │ │ ├── usercp_themeselector.html
   │ │ │ │ │ ├── usercp_themeselector_option.html
   │ │ │ │ │ ├── usercp_usergroups.html
   │ │ │ │ │ ├── usercp_usergroups_joinable.html
   │ │ │ │ │ ├── usercp_usergroups_joinable_usergroup.html
   │ │ │ │ │ ├── usercp_usergroups_joinable_usergroup_description.html
   │ │ │ │ │ ├── usercp_usergroups_joinable_usergroup_join.html
   │ │ │ │ │ ├── usercp_usergroups_joingroup.html
   │ │ │ │ │ ├── usercp_usergroups_leader.html
   │ │ │ │ │ ├── usercp_usergroups_leader_usergroup.html
   │ │ │ │ │ ├── usercp_usergroups_leader_usergroup_memberlist.html
   │ │ │ │ │ ├── usercp_usergroups_leader_usergroup_moderaterequests.html
   │ │ │ │ │ ├── usercp_usergroups_memberof.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup_description.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup_display.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup_leave.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup_leaveleader.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup_leaveother.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup_leaveprimary.html
   │ │ │ │ │ ├── usercp_usergroups_memberof_usergroup_setdisplay.html
   │ │ │ │ │ ├── usercp_warnings.html
   │ │ │ │ │ ├── usercp_warnings_warning.html
   │ │ │ │ │ ├── usercp_warnings_warning_post.html
   │ │ │ │ │ ├── video_dailymotion_embed.html
   │ │ │ │ │ ├── video_facebook_embed.html
   │ │ │ │ │ ├── video_liveleak_embed.html
   │ │ │ │ │ ├── video_metacafe_embed.html
   │ │ │ │ │ ├── video_mixer_embed.html
   │ │ │ │ │ ├── video_myspacetv_embed.html
   │ │ │ │ │ ├── video_twitch_embed.html
   │ │ │ │ │ ├── video_vimeo_embed.html
   │ │ │ │ │ ├── video_yahoo_embed.html
   │ │ │ │ │ ├── video_youtube_embed.html
   │ │ │ │ │ ├── warnings.html
   │ │ │ │ │ ├── warnings_active_header.html
   │ │ │ │ │ ├── warnings_expired_header.html
   │ │ │ │ │ ├── warnings_no_warnings.html
   │ │ │ │ │ ├── warnings_postlink.html
   │ │ │ │ │ ├── warnings_view.html
   │ │ │ │ │ ├── warnings_view_post.html
   │ │ │ │ │ ├── warnings_view_revoke.html
   │ │ │ │ │ ├── warnings_view_revoked.html
   │ │ │ │ │ ├── warnings_view_user.html
   │ │ │ │ │ ├── warnings_warn.html
   │ │ │ │ │ ├── warnings_warn_custom.html
   │ │ │ │ │ ├── warnings_warn_existing.html
   │ │ │ │ │ ├── warnings_warn_pm.html
   │ │ │ │ │ ├── warnings_warn_pm_anonymous.html
   │ │ │ │ │ ├── warnings_warn_post.html
   │ │ │ │ │ ├── warnings_warn_type.html
   │ │ │ │ │ ├── warnings_warn_type_result.html
   │ │ │ │ │ ├── warnings_warning.html
   │ │ │ │ │ ├── xmlhttp_buddyselect.html
   │ │ │ │ │ ├── xmlhttp_buddyselect_offline.html
   │ │ │ │ │ ├── xmlhttp_buddyselect_online.html
   │ │ │ ├── admin.php
   │ │ │ ├── core.php
   │ │ ├── ougcThemeFileTemplates.php
   ```

### Installing <a name = "install"></a>

Follow the next steps in order to install a copy of this plugin on your forum.

1. Download the latest package from
   the [repository releases](https://github.com/OUGC-Network/ougc-Theme-File-Templates/releases/latest).
2. Upload the contents of the _Upload_ folder to your MyBB root directory.
3. Browse to _Configuration » Plugins_ and install this plugin by clicking _Install & Activate_.

### Updating <a name = "update"></a>

Follow the next steps in order to update your copy of this plugin.

1. Browse to _Configuration » Plugins_ and deactivate this plugin by clicking _Deactivate_.
2. Follow step 1 and 2 from the [Install](#install) section.
3. Browse to _Configuration » Plugins_ and activate this plugin by clicking _Activate_.

[Go up to Table of Contents](#table_of_contents)

## 🛠 Settings <a name = "settings"></a>

You can set your settings by updating the `SETTINGS` array constant in the `ougc\ThemeFileTemplates` namespace in the
`./inc/plugins/ougcThemeFileTemplates.php` file. Use the setting key as shown below:

```PHP
define('ougc\ThemeFileTemplates\SETTINGS', [
    'importThemeFilePath' => 'install/resources/mybb_theme.xml',
    'importOnInstallation' => false,
    // set this to any template set id, then visit the admin cp,
    // and edited templates will be updated to match the file system
    // stylesheets have to be imported manually for now
    'importToTemplateSetID' => 0,
]);
```

[Go up to Table of Contents](#table_of_contents)

## ⛏ Built Using <a name = "built_using"></a>

- [MyBB](https://mybb.com/) - Web Framework
- [MyBB PluginLibrary](https://github.com/frostschutz/MyBB-PluginLibrary) - A collection of useful functions for MyBB
- [PHP](https://www.php.net/) - Server Environment

[Go up to Table of Contents](#table_of_contents)

## ✍️ Authors <a name = "authors"></a>

- [@Omar G](https://github.com/Sama34) - Idea & Initial work

See also the list of [contributors](https://github.com/OUGC-Network/ougc-Theme-File-Templates/contributors) who
participated in this project.

[Go up to Table of Contents](#table_of_contents)

## 🎉 Acknowledgements <a name = "acknowledgement"></a>

- [The Documentation Compendium](https://github.com/kylelobo/The-Documentation-Compendium)

[Go up to Table of Contents](#table_of_contents)

## 🎈 Support & Feedback <a name="support"></a>

This is free development and any contribution is welcome. Get support or leave feedback at the
official [MyBB Community](https://community.mybb.com/thread-227574.html).

Thanks for downloading and using our plugins!

[Go up to Table of Contents](#table_of_contents)