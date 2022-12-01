import { Component } from '@angular/core';
import axios from 'axios';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  // Variabel GetData for array
  public allData:any = [];
  constructor() {
        // Form Load GetData
        this.GetData();
  }
  // Function GetData from API ---------------------------------------------------------------------------
  async GetData(){
    const res:any = await axios.get('http://localhost/android_malam/api/applab10.api/get_data_info.php');

    console.log(res.data);
    this.allData = res.data.result;
  }

}
