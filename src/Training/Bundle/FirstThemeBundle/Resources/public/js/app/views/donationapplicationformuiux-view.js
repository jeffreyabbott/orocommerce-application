import BaseView from 'oroui/js/app/views/base/view';

import widgetManager from 'oroui/js/widget-manager';
import DialogWidget from 'oro/dialog-widget';

const DonationApplicationFormUIUXView = BaseView.extend({
    debugging: true,
    autoRender: true,

    // Define DOM event inside view element
    events: {
        'click .agree_blood_re_test': 'agreeBloodReTest',
        'click .category_type': 'categoryType',
        'click .mhp_option': 'mhpOption',
        'click .mhp_donor_info': 'mhpDonorInfo',
        'click .ptp_idp_option': 'ptpIdpOption',
        'click .embryos_multiple_storage_facilities': 'embryosMultipleStorageFacilities',
        'click .medical_problems': 'enableDisableTextBox',
        'click .surgeries': 'enableDisableTextBox',
        'click .current_medications': 'enableDisableTextBox',
        'click .allergies': 'enableDisableTextBox',
        'click .smoker': 'enableDisableTextBox',
        'click .alcohol_use': 'enableDisableTextBox',
        'click .hearing_problems': 'enableDisableTextBox',
        'click .dental_problems': 'enableDisableTextBox',
        'click .diet_restrictions': 'enableDisableTextBox',
        'click .history_infertility': 'enableDisableTextBox',
        'click .offspring_problems': 'enableDisableTextBox',
        'click .mother_alive': 'parentHideShow',
        'click .father_alive': 'parentHideShow',
        'click .have_sisters': 'siblingHideShow',
        'click .have_brothers': 'siblingHideShow',
        'click .save_button': 'setButtonClickedHiddenSave',
        'click .next_button': 'setButtonClickedHiddenNext',
        'click .prev_button': 'setButtonClickedHiddenPrev',

//        'input .search': 'onInputSearch',
//        'click .clear-field': 'resetSearchFieldValue'
    },



    /**
     * Named constructor
     * @param {Object} options
     */
    constructor: function DonationApplicationFormUIUXView(options) {
        DonationApplicationFormUIUXView.__super__.constructor.call(this, options);
    },

    /**
     * Initialize
     */
    initialize: function() {
        console.log("initialize"); // outputs {foo:'bar', test: 1}
        if(this.debugging) alert("initialize");

    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    agreeBloodReTest(event) {
        alert("agreeBloodReTest");
        alert(JSON.stringify(this.$(event.target).val()));
       // this.dialogWidgetTest();

    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    categoryType(event) {
        if(this.debugging) alert("categoryType");
        if(this.debugging) alert(JSON.stringify(this.$(event.target).val()));
        var category_type = this.$(event.target).val();
        if(category_type == "Anonymous" || category_type == "Approved") {
            this.$("#idp-section").show();
        } else if(category_type == "Open") {
            this.$("#idp-section").hide();
        }
    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */

    mhpOption(event) {
        if(this.debugging) alert("mhpOption");
        if(this.debugging) alert(JSON.stringify(this.$(event.target).val()));
        var mhp_option = this.$(event.target).val();
        if(mhp_option == "Yes"){
            this.$("#mhp-donor-section").show();
            this.$("#idp-participate-section").hide();
        } else if(mhp_option == "No") {
            this.$("#mhp-donor-section").hide();
            this.$("#idp-participate-section").show();
        }
    },
    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    mhpDonorInfo(event) {
        if(this.debugging) alert("mhpDonorInfo");
        if(this.debugging) alert(JSON.stringify(this.$(event.target).val()));
        var mhp_donor_info = this.$(event.target).val();
        if(mhp_donor_info == "Single"){
            this.$("#first-donor-section").show();
            this.$("#second-donor-section").hide();
        } else if(mhp_donor_info == "Partner") {
            this.$("#first-donor-section").show();
            this.$("#second-donor-section").show();
        } else if(mhp_donor_info == "") {
            this.$("#first-donor-section").hide();
            this.$("#second-donor-section").hide();
        }
    },
    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    ptpIdpOption(event) {
        if(this.debugging) alert("ptpIdpOption");
        if(this.debugging) alert(JSON.stringify(this.$(event.target).val()));
        var ptp_idp_option = this.$(event.target).val();
        if(ptp_idp_option == "Yes"){
            this.$("#id-info-when-section").show();
        } else if(ptp_idp_option == "No") {
            this.$("#id-info-when-section").hide();
        }
    },
    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    setButtonClickedHiddenSave(event) {
        if (this.debugging) alert("setting Button Clicked Hidden. Type: save_button");
        this.setButtonClickedHidden(event, 'save_button');
    },
    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    setButtonClickedHiddenNext(event) {
        if (this.debugging) alert("setting Button Clicked Hidden. Type: next_button");
        this.setButtonClickedHidden(event, 'next_button');
    },
    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    setButtonClickedHiddenPrev(event) {
        if (this.debugging) alert("setting Button Clicked Hidden. Type: prev_button");
        this.setButtonClickedHidden(event, 'prev_button');
    },
    /**
     * Reset search field value
     * @param {MouseEvent} event
     * @param button_type
     */
    setButtonClickedHidden(event, button_type) {
        if (this.debugging) alert("setting Button Clicked Hidden. Type:" + button_type);
        if (this.debugging) alert("Value: " + this.$("#button_clicked_hidden").val());
        this.$("#button_clicked_hidden").val(button_type);
        if (this.debugging) alert("Value: " + this.$("#button_clicked_hidden").val());
    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    embryosMultipleStorageFacilities(event) {
        if(this.debugging) alert("embryosMultipleStorageFacilities");
        if(this.debugging) alert(JSON.stringify(this.$(event.target).val()));
        var embryos_multiple_storage_facilities = this.$(event.target).val();
        if(embryos_multiple_storage_facilities == "Yes"){
            this.$("#embryo-more-than-one-section").show();
        } else if(embryos_multiple_storage_facilities == "No") {
            this.$("#embryo-more-than-one-section").hide();
        }
    },



    /**
     * Named dialogWidgetTest
     * @param {Object} options
     */
    dialogWidgetTest: function(options) {
 //       var widgetInstance = new DialogWidget({
 //           el: 'dialog-test-widget',
 //           elementFirst: true,
 //           title: 'Test Dialog Biatch',
 //           url: "testdialog",
 //       });
 //       widgetManager.addWidgetInstance(widgetInstance);
 //       widgetInstance.render();

        new DialogWidget({
            el: $("<div>Some text if you need will be here</div>"),
            url: "/testdialog",
            elementFirst: true,
            dialogOptions: {
                allowMaximize: true,
                allowMinimize: true,
                dblclick: 'maximize',
                title: "dialog window title",
                width: 400,
                height: 400
            }
        }).render();

    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    enableDisableTextBox(event) {
        if(this.debugging) alert("enableDisableTextBox");
        var radioFieldChoiceVal = this.$(event.target).val();
        var radioFieldChoiceID = this.$(event.target).attr("id");
        var radioFieldMainParent = this.$(event.target).parent().parent();
        var radioFieldMainParentID = radioFieldMainParent.attr("id");

        if(this.debugging) alert(radioFieldChoiceVal);
        if(this.debugging) alert(radioFieldChoiceID);
        if(this.debugging) alert(radioFieldMainParent);
        if(this.debugging) alert(radioFieldMainParentID);

        if(this.debugging) console.log(radioFieldMainParent);
        if(this.debugging) console.log(this.$(event.target));

        if (radioFieldChoiceVal=="Yes")
            $("#" + radioFieldMainParentID + "_text").prop("disabled",false);
        else
            $("#" + radioFieldMainParentID + "_text").prop("disabled",true);
    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    enableDisableEitherOrTextBoxes(event) {
        if(this.debugging) alert("enableDisableEitherOrTextBoxes");
        var radioFieldChoiceVal = this.$(event.target).val();
        var radioFieldChoiceID = this.$(event.target).attr("id");
        var radioFieldMainParent = this.$(event.target).parent().parent();
        var radioFieldMainParentID = radioFieldMainParent.attr("id");

        if(this.debugging) alert(radioFieldChoiceVal);
        if(this.debugging) alert(radioFieldChoiceID);
        if(this.debugging) alert(radioFieldMainParent);
        if(this.debugging) alert(radioFieldMainParentID);

        if(this.debugging) console.log(radioFieldMainParent);
        if(this.debugging) console.log(this.$(event.target));

        if (radioFieldChoiceVal=="Yes")
            $("#" + radioFieldMainParentID + "_text").prop("disabled",false);
        else
            $("#" + radioFieldMainParentID + "_text").prop("disabled",true);
    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    parentHideShow(event) {
        if(this.debugging) alert("parentHideShow");
        var radioFieldChoiceVal = this.$(event.target).val();
        var radioFieldChoiceID = this.$(event.target).attr("id");
        var radioFieldMainParent = this.$(event.target).parent().parent();
        var radioFieldMainParentID = radioFieldMainParent.attr("id");

        if(this.debugging) alert(radioFieldChoiceVal);
        if(this.debugging) alert(radioFieldChoiceID);
        if(this.debugging) alert(radioFieldMainParent);
        if(this.debugging) alert(radioFieldMainParentID);

        if(this.debugging) console.log(radioFieldMainParent);
        if(this.debugging) console.log(this.$(event.target));

        if (radioFieldChoiceVal=="Yes") {
            $("#" + radioFieldMainParentID + "_medical_problems_section").show();
            $("#" + radioFieldMainParentID + "_age_death_section").hide();
            $("#" + radioFieldMainParentID + "_death_cause_section").hide();
        }
        else {
            $("#" + radioFieldMainParentID + "_medical_problems_section").hide();
            $("#" + radioFieldMainParentID + "_age_death_section").show();
            $("#" + radioFieldMainParentID + "_death_cause_section").show();
        }
    },

    /**
     * Reset search field value
     * @param {MouseEvent} event
     */
    siblingHideShow(event) {
        if(this.debugging) alert("siblingHideShow");
        var radioFieldChoiceVal = this.$(event.target).val();
        var radioFieldChoiceID = this.$(event.target).attr("id");
        var radioFieldMainParent = this.$(event.target).parent().parent();
        var radioFieldMainParentID = radioFieldMainParent.attr("id");

        if(this.debugging) alert(radioFieldChoiceVal);
        if(this.debugging) alert(radioFieldChoiceID);
        if(this.debugging) alert(radioFieldMainParent);
        if(this.debugging) alert(radioFieldMainParentID);

        if(this.debugging) console.log(radioFieldMainParent);
        if(this.debugging) console.log(this.$(event.target));

        if (radioFieldChoiceVal=="Yes") {
            $("#" + radioFieldMainParentID + "_number_health_section").show();
        }
    else {
            $("#" + radioFieldMainParentID + "_number_health_section").hide();
        }
    },

});

export default DonationApplicationFormUIUXView;