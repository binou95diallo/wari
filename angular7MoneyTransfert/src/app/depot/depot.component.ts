import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-depot',
  templateUrl: './depot.component.html',
  styleUrls: ['./depot.component.css']
})
export class DepotComponent implements OnInit {
  montant: string;
  idCompteData:{};
  comptes: number;
  errorMessage: string;
  constructor(private data: DataService, private router: Router) { }

  addDepot() {
    console.log(this.montant);
   this.data.depot(this.montant,this.comptes)
    .subscribe(
      res => {
        console.log(this.comptes);
        this.router.navigate(['/compte'])
      },
      err => this.errorMessage=err.error.detail
    )   
    
  }
  getPartenaireCompte(){
    this.data.getPartenaireCompte().subscribe(
      data=>{
        this.idCompteData=data
        console.log(data);
      },error => this.errorMessage = error.error.detail
    );
  }


  ngOnInit() {
    this.getPartenaireCompte();
  }

}
