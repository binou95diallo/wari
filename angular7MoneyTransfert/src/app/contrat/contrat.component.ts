import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router, ActivatedRoute } from '@angular/router';
import * as jsPDF from 'jspdf';
import { Partenaire } from '../partenaire';

@Component({
  selector: 'app-contrat',
  templateUrl: './contrat.component.html',
  styleUrls: ['./contrat.component.css']
})
export class ContratComponent implements OnInit {

  contratPartenaire: Partenaire[];
  errorMessage: string;
  contrat:string;
   id = +this.route.snapshot.paramMap.get('id');
  constructor(private data: DataService, private router:Router,private route:ActivatedRoute) { 
    //this.genPDF();
  }

  ngOnInit() {
    this.downloadContrat();
  }

  genPDF() {
    var doc = new jsPDF();
    
      var specialElementHandlers = {
          '#hidediv' : function(element,render) {return true;}
      };
      
      doc.fromHTML($('#contrat').get(0), 40,20,{
                   'width':500,
              'elementHandlers': specialElementHandlers
      });
    
    doc.save('Contrat.pdf');
    
  }


  downloadContrat(){
    this.id = +this.route.snapshot.paramMap.get('id');
    this.data.downloadContrat(this.id).subscribe(
      res=>{
        console.log(res)
      this.contratPartenaire=res
      //this.contrat="ok"
      //this.ngOnInit()
     

    console.log("hello")
    },err=>this.errorMessage=err);
    //this.genPDF();
  }
  saveContrat(){
    this.genPDF();
    //window.print()
  }


}
