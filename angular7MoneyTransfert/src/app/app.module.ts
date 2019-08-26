import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FontAwesomeModule} from '@fortawesome/angular-fontawesome';

import {FormsModule,ReactiveFormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PartenaireComponent } from './partenaire/partenaire.component';
import { UsersComponent } from './users/users.component';
import { CompteComponent } from './compte/compte.component';
import { HomeComponent } from './home/home.component';
import { LoginComponent } from './login/login.component';
import {AuthGuard} from './auth.guard';
import {Routes, RouterModule} from '@angular/router';
import { HttpModule } from '@angular/http';
import { AuthService } from './auth.service';
import { AddPartenaireComponent } from './add-partenaire/add-partenaire.component';
import { AddUserComponent } from './add-user/add-user.component';
import { DataService } from './data.service';
import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { httpInterceptorProviders, AuthInterceptor } from './auth-interceptor.service';
import { HistoriqueOperationComponent } from './historique-operation/historique-operation.component';
import { Partenaire } from './partenaire';


const routes: Routes = [
  {path: 'login', component : LoginComponent},
];
@NgModule({
  declarations: [
    AppComponent,
    PartenaireComponent,
    UsersComponent,
    CompteComponent,
    HomeComponent,
    LoginComponent,
    AddPartenaireComponent,
    AddUserComponent,
    HistoriqueOperationComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot( routes ),
    HttpModule,
    HttpClientModule,
    FormsModule,
    FontAwesomeModule,
    ReactiveFormsModule
  ],
  providers: [AuthGuard,AuthService,DataService,Partenaire,
    { provide: HTTP_INTERCEPTORS,
      useClass: AuthInterceptor,
      multi: true 
    }

  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
