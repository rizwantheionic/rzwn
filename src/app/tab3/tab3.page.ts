import { Component } from '@angular/core';
import axios from 'axios';

@Component({
  selector: 'app-tab3',
  templateUrl: 'tab3.page.html',
  styleUrls: ['tab3.page.scss']
})
export class Tab3Page {


  // Variabel GetData for array
  public allData:any = [];
  constructor() {
        // Form Load GetData
        this.GetData();
  }
  // Function GetData from API ---------------------------------------------------------------------------
  async GetData(){
    const res:any = await axios.get('http://localhost/android_malam/api/applab10.api/get_data_member.php');

    console.log(res.data);
    this.allData = res.data.result;
  }

}
