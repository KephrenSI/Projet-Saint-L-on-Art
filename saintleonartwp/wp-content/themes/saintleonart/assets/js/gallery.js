;(function(){"use strict";var $overlay=$('<div id="overlay"></div>');var $image=$("<img>");$overlay.append($image);$("body").append($overlay);$(".photos__list--link").click(function(event){event.preventDefault();var imageLocation=$(this).attr("href");$image.attr("src",imageLocation);$overlay.show();});$("#overlay").click(function(){$("#overlay").hide();});})();
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImdhbGxlcnkuanMiXSwibmFtZXMiOlsiJG92ZXJsYXkiLCIkIiwiJGltYWdlIiwiYXBwZW5kIiwiY2xpY2siLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwiaW1hZ2VMb2NhdGlvbiIsImF0dHIiLCJzaG93IiwiaGlkZSJdLCJtYXBwaW5ncyI6IjBCQUFBLEdBQUlBLFVBQVdDLEVBQUUsMEJBQUYsQ0FBZixDQUNBLEdBQUlDLFFBQVNELEVBQUUsT0FBRixDQUFiLENBR0FELFNBQVNHLE1BQVQsQ0FBZ0JELE1BQWhCLEVBR0FELEVBQUUsTUFBRixFQUFVRSxNQUFWLENBQWlCSCxRQUFqQixFQUdBQyxFQUFFLHFCQUFGLEVBQXlCRyxLQUF6QixDQUFnQyxTQUFTQyxLQUFULENBQWdCLENBQzVDQSxNQUFNQyxjQUFOLEdBQ0EsR0FBSUMsZUFBZ0JOLEVBQUUsSUFBRixFQUFRTyxJQUFSLENBQWEsTUFBYixDQUFwQixDQUdBTixPQUFPTSxJQUFQLENBQVksS0FBWixDQUFtQkQsYUFBbkIsRUFHQVAsU0FBU1MsSUFBVCxHQUNILENBVEQsRUFXQVIsRUFBRSxVQUFGLEVBQWNHLEtBQWQsQ0FBb0IsVUFBVyxDQUMzQkgsRUFBRyxVQUFILEVBQWdCUyxJQUFoQixHQUNILENBRkQsRSIsImZpbGUiOiJnYWxsZXJ5LmpzIiwic291cmNlc0NvbnRlbnQiOlsidmFyICRvdmVybGF5ID0gJCgnPGRpdiBpZD1cIm92ZXJsYXlcIj48L2Rpdj4nKTtcbnZhciAkaW1hZ2UgPSAkKFwiPGltZz5cIik7XG5cbi8vQW4gaW1hZ2UgdG8gb3ZlcmxheVxuJG92ZXJsYXkuYXBwZW5kKCRpbWFnZSk7XG5cbi8vQWRkIG92ZXJsYXlcbiQoXCJib2R5XCIpLmFwcGVuZCgkb3ZlcmxheSk7XG5cbi8vY2xpY2sgdGhlIGltYWdlIGFuZCBhIHNjYWxlZCB2ZXJzaW9uIG9mIHRoZSBmdWxsIHNpemUgaW1hZ2Ugd2lsbCBhcHBlYXJcbiQoXCIucGhvdG9zX19saXN0LS1saW5rXCIpLmNsaWNrKCBmdW5jdGlvbihldmVudCkge1xuICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgdmFyIGltYWdlTG9jYXRpb24gPSAkKHRoaXMpLmF0dHIoXCJocmVmXCIpO1xuXG4gICAgLy91cGRhdGUgb3ZlcmxheSB3aXRoIHRoZSBpbWFnZSBsaW5rZWQgaW4gdGhlIGxpbmtcbiAgICAkaW1hZ2UuYXR0cihcInNyY1wiLCBpbWFnZUxvY2F0aW9uKTtcblxuICAgIC8vc2hvdyB0aGUgb3ZlcmxheVxuICAgICRvdmVybGF5LnNob3coKTtcbn0gKTtcblxuJChcIiNvdmVybGF5XCIpLmNsaWNrKGZ1bmN0aW9uKCkge1xuICAgICQoIFwiI292ZXJsYXlcIiApLmhpZGUoKTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIvc291cmNlLyJ9