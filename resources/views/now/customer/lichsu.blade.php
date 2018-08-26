@extends('now.master')
@section('content')
<div class="main-content ng-scope">
  <div class="coming-order-container">
    <div class="history-incoming-block pd-top30">
      <h5 class="history-incoming-header ng-hide" ng-show="historyCtrl.countCommonOrder > 0">Đơn hàng đang xử lý
      </h5>
      <!-- ngRepeat: item in historyCtrl.listCommingOrders -->
    </div>
    <h5 class="history-incoming-header" style="padding-bottom: 5px; padding-top: 15px;" ng-init="historyCtrl.loadData()">Lịch sử đặt giao hàng
    </h5>
    <div class="container-list-bill container-tab-everyday-food" style="clear:both;">
      {{-- <div class="container-filter-bill">
        <div class="filter-status">
          <label for="">Trạng thái
          </label>
          <div class="select-wrapper ng-pristine ng-untouched ng-valid ng-not-empty">
            <span class="caret">▼
            </span>
            <input type="text" class="select-dropdown" readonly="true" data-activates="select-options-39198955-e94e-826d-66a6-6b8cb3d2d678" value="All">
            <ul id="select-options-39198955-e94e-826d-66a6-6b8cb3d2d678" class="dropdown-content select-dropdown ">
              <li class="">
                <span>All
                </span>
              </li>
              <li class="">
                <span>Completed
                </span>
              </li>
              <li class="">
                <span>Cancel
                </span>
              </li>
            </ul>
            <select ng-model="historyCtrl.selectedStatusOptions.value" ng-options="option.value as option.name for option in historyCtrl.statusOptions" ng-change="historyCtrl.selectFilterStatusChange(option.value)" class="ng-pristine ng-untouched ng-valid ng-not-empty initialized">
              <option label="All" value="string:0" selected="selected">All
              </option>
              <option label="Completed" value="string:7">Completed
              </option>
              <option label="Cancel" value="string:8">Cancel
              </option>
            </select>
          </div>
        </div>
        <div class="group-input">
          <label for="start-day" class="active">Từ ngày
          </label>
          <input type="text" placeholder="" class="datepicker start-day picker__input" id="start-day" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="start-day_root">
          <div class="picker" id="start-day_root" tabindex="0" aria-hidden="true">
            <div class="picker__holder">
              <div class="picker__frame">
                <div class="picker__wrap">
                  <div class="picker__box">
                    <div class="picker__date-display">
                      <div class="picker__weekday-display">Wednesday
                      </div>
                      <div class="picker__month-display">
                        <div>Aug
                        </div>
                      </div>
                      <div class="picker__day-display">
                        <div>1
                        </div>
                      </div>
                      <div class="picker__year-display">
                        <div>2018
                        </div>
                      </div>
                    </div>
                    <div class="picker__calendar-container">
                      <div class="picker__header">
                        <div class="picker__month">August
                        </div>
                        <div class="picker__year">2018
                        </div>
                        <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="start-day_table" title="Previous month"> 
                        </div>
                        <div class="picker__nav--next" data-nav="1" role="button" aria-controls="start-day_table" title="Next month"> 
                        </div>
                      </div>
                      <table class="picker__table" id="start-day_table" role="grid" aria-controls="start-day" aria-readonly="true">
                        <thead>
                          <tr>
                            <th class="picker__weekday" scope="col" title="Sunday">S
                            </th>
                            <th class="picker__weekday" scope="col" title="Monday">M
                            </th>
                            <th class="picker__weekday" scope="col" title="Tuesday">T
                            </th>
                            <th class="picker__weekday" scope="col" title="Wednesday">W
                            </th>
                            <th class="picker__weekday" scope="col" title="Thursday">T
                            </th>
                            <th class="picker__weekday" scope="col" title="Friday">F
                            </th>
                            <th class="picker__weekday" scope="col" title="Saturday">S
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1532797200000" role="gridcell" aria-label="29-07-2018">29
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1532883600000" role="gridcell" aria-label="30-07-2018">30
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1532970000000" role="gridcell" aria-label="31-07-2018">31
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1533056400000" role="gridcell" aria-label="01-08-2018" aria-selected="true" aria-activedescendant="true">1
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533142800000" role="gridcell" aria-label="02-08-2018">2
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533229200000" role="gridcell" aria-label="03-08-2018">3
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533315600000" role="gridcell" aria-label="04-08-2018">4
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533402000000" role="gridcell" aria-label="05-08-2018">5
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533488400000" role="gridcell" aria-label="06-08-2018">6
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533574800000" role="gridcell" aria-label="07-08-2018">7
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533661200000" role="gridcell" aria-label="08-08-2018">8
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533747600000" role="gridcell" aria-label="09-08-2018">9
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533834000000" role="gridcell" aria-label="10-08-2018">10
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533920400000" role="gridcell" aria-label="11-08-2018">11
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534006800000" role="gridcell" aria-label="12-08-2018">12
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534093200000" role="gridcell" aria-label="13-08-2018">13
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534179600000" role="gridcell" aria-label="14-08-2018">14
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534266000000" role="gridcell" aria-label="15-08-2018">15
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534352400000" role="gridcell" aria-label="16-08-2018">16
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534438800000" role="gridcell" aria-label="17-08-2018">17
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534525200000" role="gridcell" aria-label="18-08-2018">18
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534611600000" role="gridcell" aria-label="19-08-2018">19
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534698000000" role="gridcell" aria-label="20-08-2018">20
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534784400000" role="gridcell" aria-label="21-08-2018">21
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534870800000" role="gridcell" aria-label="22-08-2018">22
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus picker__day--today" data-pick="1534957200000" role="gridcell" aria-label="23-08-2018">23
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535043600000" role="gridcell" aria-label="24-08-2018">24
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535130000000" role="gridcell" aria-label="25-08-2018">25
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535216400000" role="gridcell" aria-label="26-08-2018">26
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535302800000" role="gridcell" aria-label="27-08-2018">27
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535389200000" role="gridcell" aria-label="28-08-2018">28
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535475600000" role="gridcell" aria-label="29-08-2018">29
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535562000000" role="gridcell" aria-label="30-08-2018">30
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535648400000" role="gridcell" aria-label="31-08-2018">31
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535734800000" role="gridcell" aria-label="01-09-2018">1
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535821200000" role="gridcell" aria-label="02-09-2018">2
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535907600000" role="gridcell" aria-label="03-09-2018">3
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535994000000" role="gridcell" aria-label="04-09-2018">4
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536080400000" role="gridcell" aria-label="05-09-2018">5
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536166800000" role="gridcell" aria-label="06-09-2018">6
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536253200000" role="gridcell" aria-label="07-09-2018">7
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536339600000" role="gridcell" aria-label="08-09-2018">8
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="picker__footer">
                      <button class="btn-flat picker__today" type="button" data-pick="1534957200000" disabled="" aria-controls="start-day">Today
                      </button>
                      <button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="start-day">Clear
                      </button>
                      <button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="start-day">Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <label for="end-day" class="active">Đến ngày
          </label>
          <input type="text" placeholder="" class="datepicker end-day picker__input" id="end-day" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="end-day_root">
          <div class="picker" id="end-day_root" tabindex="0" aria-hidden="true">
            <div class="picker__holder">
              <div class="picker__frame">
                <div class="picker__wrap">
                  <div class="picker__box">
                    <div class="picker__date-display">
                      <div class="picker__weekday-display">Thursday
                      </div>
                      <div class="picker__month-display">
                        <div>Aug
                        </div>
                      </div>
                      <div class="picker__day-display">
                        <div>23
                        </div>
                      </div>
                      <div class="picker__year-display">
                        <div>2018
                        </div>
                      </div>
                    </div>
                    <div class="picker__calendar-container">
                      <div class="picker__header">
                        <div class="picker__month">August
                        </div>
                        <div class="picker__year">2018
                        </div>
                        <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="end-day_table" title="Previous month"> 
                        </div>
                        <div class="picker__nav--next" data-nav="1" role="button" aria-controls="end-day_table" title="Next month"> 
                        </div>
                      </div>
                      <table class="picker__table" id="end-day_table" role="grid" aria-controls="end-day" aria-readonly="true">
                        <thead>
                          <tr>
                            <th class="picker__weekday" scope="col" title="Sunday">S
                            </th>
                            <th class="picker__weekday" scope="col" title="Monday">M
                            </th>
                            <th class="picker__weekday" scope="col" title="Tuesday">T
                            </th>
                            <th class="picker__weekday" scope="col" title="Wednesday">W
                            </th>
                            <th class="picker__weekday" scope="col" title="Thursday">T
                            </th>
                            <th class="picker__weekday" scope="col" title="Friday">F
                            </th>
                            <th class="picker__weekday" scope="col" title="Saturday">S
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1532797200000" role="gridcell" aria-label="29-07-2018">29
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1532883600000" role="gridcell" aria-label="30-07-2018">30
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1532970000000" role="gridcell" aria-label="31-07-2018">31
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533056400000" role="gridcell" aria-label="01-08-2018">1
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533142800000" role="gridcell" aria-label="02-08-2018">2
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533229200000" role="gridcell" aria-label="03-08-2018">3
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533315600000" role="gridcell" aria-label="04-08-2018">4
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533402000000" role="gridcell" aria-label="05-08-2018">5
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533488400000" role="gridcell" aria-label="06-08-2018">6
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533574800000" role="gridcell" aria-label="07-08-2018">7
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533661200000" role="gridcell" aria-label="08-08-2018">8
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533747600000" role="gridcell" aria-label="09-08-2018">9
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533834000000" role="gridcell" aria-label="10-08-2018">10
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1533920400000" role="gridcell" aria-label="11-08-2018">11
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534006800000" role="gridcell" aria-label="12-08-2018">12
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534093200000" role="gridcell" aria-label="13-08-2018">13
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534179600000" role="gridcell" aria-label="14-08-2018">14
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534266000000" role="gridcell" aria-label="15-08-2018">15
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534352400000" role="gridcell" aria-label="16-08-2018">16
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534438800000" role="gridcell" aria-label="17-08-2018">17
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534525200000" role="gridcell" aria-label="18-08-2018">18
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534611600000" role="gridcell" aria-label="19-08-2018">19
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534698000000" role="gridcell" aria-label="20-08-2018">20
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534784400000" role="gridcell" aria-label="21-08-2018">21
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1534870800000" role="gridcell" aria-label="22-08-2018">22
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1534957200000" role="gridcell" aria-label="23-08-2018" aria-selected="true" aria-activedescendant="true">23
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535043600000" role="gridcell" aria-label="24-08-2018">24
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535130000000" role="gridcell" aria-label="25-08-2018">25
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535216400000" role="gridcell" aria-label="26-08-2018">26
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535302800000" role="gridcell" aria-label="27-08-2018">27
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535389200000" role="gridcell" aria-label="28-08-2018">28
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535475600000" role="gridcell" aria-label="29-08-2018">29
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535562000000" role="gridcell" aria-label="30-08-2018">30
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--infocus" data-pick="1535648400000" role="gridcell" aria-label="31-08-2018">31
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535734800000" role="gridcell" aria-label="01-09-2018">1
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535821200000" role="gridcell" aria-label="02-09-2018">2
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535907600000" role="gridcell" aria-label="03-09-2018">3
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1535994000000" role="gridcell" aria-label="04-09-2018">4
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536080400000" role="gridcell" aria-label="05-09-2018">5
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536166800000" role="gridcell" aria-label="06-09-2018">6
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536253200000" role="gridcell" aria-label="07-09-2018">7
                              </div>
                            </td>
                            <td role="presentation">
                              <div class="picker__day picker__day--outfocus" data-pick="1536339600000" role="gridcell" aria-label="08-09-2018">8
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="picker__footer">
                      <button class="btn-flat picker__today" type="button" data-pick="1534957200000" disabled="" aria-controls="end-day">Today
                      </button>
                      <button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="end-day">Clear
                      </button>
                      <button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="end-day">Close
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <span class="btn-submit" ng-click="historyCtrl.filterOrderHistoryOnClick()">Tìm kiếm
        </span>
        <script>
          $(function () {
            var $inputStartDate = $('.start-day').pickadate({
              format: 'dd-mm-yyyy',
              closeOnSelect: true,
              onStart: function () {
                var date = new Date();
                this.set('select', [date.getFullYear(), date.getMonth(), 1]);
              }
            }
                                                           );
            var $inputEndDate = $('.end-day').pickadate({
              format: 'dd-mm-yyyy',
              closeOnSelect: true,
              onStart: function () {
                var date = new Date();
                this.set('select', [date.getFullYear(), date.getMonth(), date.getDate()]);
              }
            }
                                                       );
          }
           );
        </script>
      </div> --}}
      <div id="billfinished" class="widget-bill border-radius4">
        <div class="header-table-bill clearfix">
          <div class="column-table-bill col-table-1 pull-left" style="height:40px;">
            <span class="txt-red">STT
            </span>
          </div>
          <div class="column-table-bill col-table-2 pull-left" style="height:40px;">
            <span class="txt-red">Mã order/Loại
            </span>
          </div>
          <div class="column-table-bill col-table-4 pull-left center" style="height:40px;">
            <span class="txt-red">Ngày đặt
            </span>
          </div>
          <div class="column-table-bill col-table-5 pull-left" style="height:40px;">
            <span class="txt-red">Nơi đặt
            </span>
          </div>
          <div class="column-table-bill col-table-6 pull-left" style="height:40px;">
            <span class="txt-red">CSKH/ Giao hàng
            </span>
          </div>
          <div class="column-table-bill col-table-8 pull-left" style="height:40px;">
            <span class="txt-red">Tổng tiền
            </span>
          </div>
          <div class="column-table-bill col-table-9 pull-left center" style="height:40px;">
            <span class="txt-red">Trạng thái
            </span>
          </div>
          <div class="column-table-bill col-table-10 pull-left" style="height:40px;">
            <span class="txt-red">Chi tiết
            </span>
          </div>
        </div>
        <!-- ngRepeat: item in historyCtrl.listResult -->
        @foreach($ddh as $key => $dh)
        <div class="row-bill clearfix font12 ng-scope">
          <div class="column-table-bill col-table-1 pull-left">
            <span class="ng-binding">{{ $key + 1 }}
            </span>
          </div>
          <div class="column-table-bill col-table-2 pull-left">
            <span style="font-weight:bold;" class="ng-binding">
              {{$dh->id_ddh}}
            </span>
          </div>
          <div class="column-table-bill col-table-4 pull-left">
            <span class="block ng-binding">
              {{ $dh->created_at }}
            </span>
          </div>
          <div class="column-table-bill col-table-5 pull-left">
            <a href="/cuahang/{{ $dh->thongtincuahang->tenkhongdau }}" target="_blank" style="color:#525252">
              <span class="block bold txt-elipsis ng-binding">
                {{ $dh->thongtincuahang->tencuahang }}
              </span>
              <span class="block txt-elipsis ng-binding">
                {{ $dh->thongtincuahang->diachi }}
              </span>
            </a>
          </div>
          <div class="column-table-bill col-table-6 pull-left">
            <!-- ngIf: (item.ShipperResId) > 0 -->
            <!-- ngIf: item.StatusId == 8 -->
            {{-- <span ng-if="item.StatusId == 8" class="block bold txt-elipsis capitalize ng-binding ng-scope">
              Thanh Tâm Trần 
            </span> --}}
            <!-- end ngIf: item.StatusId == 8 -->
            <!-- ngIf: item.ShipperId > 0 && (item.StatusId >= 5 && item.StatusId <= 10) && item.StatusId != 8 -->
            <!-- ngIf: item.ShipperId <= 0 && (item.StatusId >= 5 && item.StatusId <= 10) && item.StatusId != 8 -->
            <!-- ngIf: item.Shipper.PhoneNumber && !(item.StatusId > 6 && item.StatusId < 10) -->
            <b>
              <!-- ngIf: item.StatusId == 7 -->
            </b>
          </div>
          <div class="column-table-bill col-table-8 pull-left">
            <div style="font-weight:bold">
              <span class="ng-binding">
                {{ $dh->tongtien + $dh->phivc }}
              </span>
              <span style="font-size:9px;position:relative;top:-4px;">đ
              </span>
            </div>
            <div>
              <span class="ng-binding">
                {{ count($dh->chitiet) }} món
              </span>
            </div>
          </div>
          <div class="column-table-bill col-table-9 pull-left">
            @if($dh->status == 0)
              <div class="bold cancel-color">Đang chờ
              </div>
            @elseif($hs->status == 1)
              <div class="bold reorder-color ng-scope">
                <div style="color: gray">Đã giao
                </div>
              </div>
            @else
              <div class="bold cancel-color">Đã hủy
              </div>
            @endif
          </div>
          <div class="column-table-bill col-table-10 pull-left">
            <p style="margin:5px 0" ng-show="((item.OrderNotes != null &amp;&amp; item.OrderNotes.length > 0) || item.UserNote.length > 0) &amp;&amp; item.StatusId == 8" class="ng-hide">
              <a style="cursor:pointer; color:#0f76a9" ng-click="historyCtrl.showWhyCancelOrder(item.OrderNoteText)">
                Lý do hủy đơn
              </a>
            </p>
            <p style="margin: 5px 0;">
              <a href="javascript:void(0)" title="Chi tiết" onclick="onClickDetail({{ $dh }})">Xem chi tiết
              </a>
            </p>
          </div>
          <div style="padding: 0 65px; clear: both">
            <div class="reason-payfail ng-hide" ng-show="item.PaidStatus == 3 &amp;&amp; item.PaymentMethodId == 4" ng-click="historyCtrl.showHistoryPaymentChargeFailed(item.PaymentTransaction.CardType, item.PaymentTransaction.CardNumber, item.PaymentTransaction.PaymentErrorMessage)">
              <i class="fa fa-2x fa-warning">
              </i> 
              <b>Thẻ không thanh toán được.
              </b> Đơn hàng sẽ được thử thanh toán lại hoặc chuyển qua thu tiền mặt.
            </div>
          </div>
        </div>
        @endforeach
        <!-- end ngRepeat: item in historyCtrl.listResult -->
      </div>
    </div>
    <div class="modal-footer pagation clearfix ng-hide" ng-show="historyCtrl.totalCounts > historyCtrl.pageSize">
      <!-- ngIf: historyCtrl.paging.length > 3 && historyCtrl.pageIndex > 1 -->
      <!-- ngRepeat: p in historyCtrl.paging -->
      <a ng-repeat="p in historyCtrl.paging" ng-click="historyCtrl.pageIndex = p.value" ng-class="{active: historyCtrl.isActive(p)}" ng-hide="(historyCtrl.pageIndex - p.value > 5)||(p.value - historyCtrl.pageIndex > 5)" class="number-page ng-binding ng-scope active">1
      </a>
      <!-- end ngRepeat: p in historyCtrl.paging -->
      <!-- ngIf: historyCtrl.paging.length > 3 && historyCtrl.pageIndex <= historyCtrl.paging.length-1 -->
    </div>
  </div>
  <div id="repayToppayInfo" class="modal">
    <a class="modal-close btn-close-modal" ng-click="historyCtrl.reloadPage()">
      <i class="fa fa-close fa-1x5">
      </i>
    </a>
    <div class="modal-content" style="height:420px;background:#fff;padding:0px!important;">
      <div style="text-align:center;">
        <div class="msg-order-success">
          Đơn hàng này đang chờ thanh toán. Bạn có thể thanh toán tại đây. Cảm ơn bạn đã sử dụng dịch vụ của Now.vn!
        </div>
        <div ng-show="historyCtrl.paymentMethod === 6 &amp;&amp; historyCtrl.directPaymentUrl.length > 0" class="ng-hide">
          <div style="padding:10px;">
            <span>Scan QR code bên dưới để thanh toán qua AirPay.
            </span>
          </div>
          <div style="padding:10px;">
            <img id="toppay-qrcode" ng-src="">
          </div>
        </div>
        <div>
          <a href="/lich-su-dat-mon" class="modal-action waves-effect waves-light gray btn">Lịch sử đặt món
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-popup-modal">
    <div class="modal" id="popup-modal-history" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
    {{-- <div class="modal open" id="modal-history-detail" style="z-index: 1003; display: block; opacity: 1; transform: scaleX(1); top: 10%;"> --}}
        <h4 class="txt-confirm">Chi tiết đơn hàng cần thanh toán</h4>
        <div class="container-info-member" id="history-content">

        </div>
        <div class="footer-modal modal-footer modal-fixed-footer clearfix" style="background-color:#f2f2f2;position:relative;">
            <a href="javascript:void(0);" class="waves-effect btn-close modal-close border-radius4" id="close-modal-history">Đóng</a>
        </div>
    </div>
  </div>

  <div class="container-popup-modal">
    <div class="modal" id="modal-history-cancel" style=" width: 50%;height:auto">
      <h4 class="txt-confirm">Hủy đơn hàng
      </h4>
      <div class="container-info-member">
        <p class="font14  clearfix" style="">
          <span class="pull-right ng-binding" style="color:red">#
          </span>
        </p>
        <div class="table-detail-bill">
          <div class="title-table-bill table-content-bill clearfix">
            <span style="font-weight:bold; font-size:16px">Lý do bạn hủy đơn hàng ?
            </span>
          </div>
          <div class="container-table-content-bill">
            <!-- ngRepeat: user in historyCtrl.dataNote -->
            <div>
              <textarea style="width:100%;" class="bor ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" ng-model="historyCtrl.UserCancelNote" ng-maxlength="255" ng-trim="true" placeholder="Nhập lý do khác (nếu có)" maxlength="255">
              </textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-modal modal-footer" style="background-color:#f2f2f2;position:relative;text-align:right">
        <a href="javascript:void(0);" class="waves-effect btn-close_2 modal-close border-radius4" ng-click="historyCtrl.cancelOrder(-1)">Hủy đơn hàng
        </a>
        <a href="javascript:void(0);" class="waves-effect btn-close_2 modal-close border-radius4">Đóng
        </a>
      </div>
    </div>
  </div>

  <style>
    .btn-close_2 {
      width: 200px;
      height: 35px;
      line-height: 35px;
      text-align: center;
      background-color: #cf2127;
      color: #fff;
      font-size: 14px;
      z-index: 222;
      /*position:relative;*/
    }
  </style>
  <div class="container-popup-modal">
    <div class="modal" id="modal-history-detail-payment-charge-failed">
      <div class="container-info-member">
        <div style="text-align: center">
          <p style="font-size: 14px;">Đơn hàng này thanh toán bằng thẻ 
            <b class="ng-binding"> 
            </b> không thành công vì lý do 
            <b class="ng-binding">
            </b>
          </p>
        </div>
      </div>
      <div class="footer-modal modal-footer modal-fixed-footer clearfix" style="background-color:#f2f2f2;position:relative;">
        <a href="javascript:void(0);" class="waves-effect btn-close modal-close border-radius4">Đóng
        </a>
      </div>
    </div>
  </div>
  <!--Rating order-->
  <div class="container-popup-modal-rate">
    <div id="rateinfo" class="modal">
      <input type="hidden" name="OrderId" ng-model="historyCtrl.OrderRating.OrderCode" value="" class="ng-pristine ng-untouched ng-valid ng-empty">
      <div class="modal-header-rate ng-binding">Report Order: 
      </div>
      <div class="wrapp-rate">
        <div class="modal-content" style="height: auto; background: #fff; padding: 0px !important;">
          <div class="group-share-left">
            <img class="avatar-rate" alt="Avatar Call Center">
          </div>
          <div class="group-share-content">
            <h5 class="title-rate">Đánh giá CSKH: 
              <b class="ng-binding">
              </b>
            </h5>
            <input type="text" name="ShipperRateStar" ng-model="historyCtrl.OrderRating.CSRateStar" class="cs-star kv-fa rating-loading ng-pristine ng-untouched ng-valid ng-empty" value="" dir="ltr" data-size="sm" title="">
          </div>
          <div class="clearfix">
          </div>
          <div class="group-share-left" ng-show="historyCtrl.OrderRating.ShipperResId == null || historyCtrl.OrderRating.ShipperResId == 0 &amp;&amp; historyCtrl.OrderRating.ShippingMethod != historyCtrl.ShippingMethod.pickup">
            <img class="avatar-rate" alt="Avatar Shipper">
          </div>
          <div class="group-share-content" ng-show="historyCtrl.OrderRating.ShipperResId == null || historyCtrl.OrderRating.ShipperResId == 0 &amp;&amp; historyCtrl.OrderRating.ShippingMethod != historyCtrl.ShippingMethod.pickup">
            <h5 class="title-rate">Đánh giá người giao hàng: 
              <b class="ng-binding">
              </b>
            </h5>
            <input type="text" name="ShipperRateStar" ng-model="historyCtrl.OrderRating.ShipperRateStar" class="shipper-star kv-fa rating-loading ng-pristine ng-untouched ng-valid ng-empty" value="" dir="ltr" data-size="sm" title="">
          </div>
          <div class="clearfix">
          </div>
          <div style="display: none">
            <textarea placeholder="Comment..." class="textarea-comment ng-pristine ng-untouched ng-valid ng-binding ng-empty" ng-model="historyCtrl.OrderRating.Comment" ng-bind-html="historyCtrl.OrderRating.Comment">
            </textarea>
          </div>
        </div>
        <div class="modal-footer" style="padding: 5px 20px;">
          <button ng-hide="historyCtrl.OrderRating.Rated > 0" ng-click="historyCtrl.submitRate()" class="btn btn-rate-submit">Gửi
          </button>
        </div>
      </div>
    </div>
    <div class="wrapper-chat">
      <div class="list-chat-order">
      </div>
    </div>
  </div>
  <!--End rating order-->

  <!-- Visa Password Prompt -->
  <div id="promptVisaPasswordModal" class="modal DesShippingInfo">
    <a class="modal-close btn-close-modal">
      <i class="fa fa-close fa-1x5">
      </i>
    </a>
    <div class="modal-content">
      <h6 class="bold">Bảo mật thông tin
      </h6>
      <label for="visa_password" style="font-size: 14px" class="active">Vui lòng nhập mật khẩu để xác nhận thanh toán!
      </label>
      <input placeholder="Vui lòng nhập mật khẩu" style="border: 1px solid rgb(204, 204, 204);border-radius: 3px;padding: 3px 5px;" type="password" id="visa_password" class="validate ng-pristine ng-untouched ng-valid ng-empty" ng-model="historyCtrl.confirmPasswordText">
    </div>
    <div class="modal-footer" style="height: 35px; margin: 0px; font-weight: 600">
      <a href="javascript:void(0);" ng-click="historyCtrl.verifyPassword()">OK
      </a>
    </div>
  </div>
</div>



<script type="text/javascript">
  function onClickDetail(dh){
    $('#popup-modal-history').addClass('open');
    $('#popup-modal-history').css({
      'z-index': '1003',
      'display': 'block',
      'opacity': '1',
      'transform': 'scaleX(1)',
      'top': '10%'
    });
    console.log(dh)
    var html = `
      <p class="font14  clearfix">
          <span class="pull-left">Đặt món tại</span>
          <span class="bold capitalize pull-left ng-binding" style="margin-left: 5px;">
            ${dh.thongtincuahang.tencuahang}
          </span>
          <span class="bold pull-right font16 red-text ng-binding" style="margin-left: 5px;">
            ${dh.tongtien + dh.phivc} <span class="uppercase red-text"> đ</span>
          </span>
          <span class="pull-right font16 bold red-text">Tổng tiền: </span>
      </p>
      <div class="table-detail-bill">
          <div class="title-table-bill clearfix">
              <div class="col-bill w1-bill pull-left">
                  <span class="bold">Thành viên</span>
              </div>
              <div class="col-bill w2-bill pull-left">
                  <span class="bold">Món ăn</span>
              </div>
              <div class="col-bill w3-bill pull-left">
                  <span class="bold">Số lượng</span>
              </div>
              <div class="col-bill w4-bill pull-left">
                  <span class="bold">Giá</span>
              </div>

              <div class="col-bill w5-bill pull-left">
                  <span class="bold">Phí</span>
              </div>
              <div class="col-bill w6-bill pull-left">
                  <span class="bold">Tổng cộng</span>
              </div>
              <div class="col-bill w7-bill pull-left" style="text-indent:-9999999px;">
                  checkbox
              </div>
          </div>
          <div class="container-table-content-bill">
            <div class="table-content-bill clearfix">
              <div class="col-content-bill w1-bill pull-left">
                  <div class="user-bill clearfix">
                      <div class="pull-left">
                          <img width="40" height="40" class="circle" src="/upload/icon/userlogin.png">
                      </div>
                      <p class="user-name-bill bold font14 capitalize mar0 ng-binding">
                        ${ '{{ Auth::user()->name }}' }
                      </p>
                  </div>
              </div>
              <div class="col-content-bill w2-bill pull-left">
                  <!-- ngRepeat: dish in user.Items -->
                  `
                  dh.chitiet.forEach(function(item) {
                    html +=  `<div class="count-number-food clearfix ng-scope" ng-tool-tip="">
                        <span class="pull-left">
                        <a href="javascript:void(0)" class="topping-food pull-left circle ng-scope"></a>
                          <span class="">
                            ${item.sanpham.tensp}
                          </span>
                        </span>
                    </div>`
                  });
              html += `</div>
                  <div class="col-content-bill w3-bill pull-left">
                      <span class="ng-binding">${dh.chitiet.length} Món</span>
                  </div>
                  <div class="col-content-bill w4-bill pull-left">
                      <span class="ng-binding">${dh.tongtien} đ</span>
                  </div>

                  <div class="col-content-bill w5-bill pull-left">
                      <span class="ng-binding">${dh.phivc} đ</span>
                  </div>
                  <div class="col-content-bill w6-bill pull-left">
                      <span class="bold red-text ng-binding">${dh.tongtien + dh.phivc} đ</span>
                  </div>
                  <div class="col-content-bill w7-bill pull-left" ng-show="!user.IsCreateBySystem">
                      <a href="#" class="topping-food has-topping pull-left circle ng-hide" ng-show="historyCtrl.orderGroup != 'Single' &amp;&amp; user.IsHost == false">
                          <input type="checkbox" id="2249421">
                          <label for="2249421"></label>
                      </a>
                  </div>
              </div>
          </div>
      </div>
    `
    $('#history-content').html(html);
  }
  
  $('#popup-modal-history').on('click', '#close-modal-history', function(){
    $('#popup-modal-history').removeClass('open');
    $('#popup-modal-history').css({
      'z-index': '1003',
      'display': 'none',
      'opacity': '0',
      'transform': 'scaleX(0.7)',
      'top': '4%'
    });
    $('#history-content').html('');
  })
</script>

@endsection
