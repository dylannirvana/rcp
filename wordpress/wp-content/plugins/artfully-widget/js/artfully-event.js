jQuery(document).ready(function(){
    artfully.configure({
        base_uri: 'https://www.artful.ly/api/v3/',
        store_uri: 'https://www.artful.ly/widget/v3/'
    });
    artfully.widgets.event().display(artfully_event_vars.eventId);
    artfully.widgets.event().display(artfully_event_vars2.eventId);
    artfully.widgets.event().display(artfully_event_vars3.eventId);
    artfully.widgets.event().display(artfully_event_vars4.eventId);
    artfully.widgets.event().display(artfully_event_vars5.eventId);

   
});