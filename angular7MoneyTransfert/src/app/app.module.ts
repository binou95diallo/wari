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
import { AuthInterceptor } from './auth-interceptor.service';
import { HistoriqueOperationComponent } from './historique-operation/historique-operation.component';
import { Partenaire } from './partenaire';
import { ImageUploadComponent } from './image-upload/image-upload.component';
import { NavbarComponent} from './navbar/navbar.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatTableModule, MatPaginatorModule, MatSortModule, MatFormFieldModule, MatInputModule, MatIconModule, MatButtonModule, MatOptionModule, MatSelectModule, MatToolbarModule, MatExpansionModule } from '@angular/material';
import { from } from 'rxjs';
import { LogoutComponent } from './logout/logout.component';
import { DepotComponent } from './depot/depot.component';
import { PasswordChangeComponent } from './password-change/password-change.component';
import { TransactionComponent } from './transaction/transaction.component';
import { TransactionRetraitComponent } from './transaction-retrait/transaction-retrait.component';
import { EditUserComponent } from './edit-user/edit-user.component';
import { EditPartenaireComponent } from './edit-partenaire/edit-partenaire.component';
import { AddCompteComponent } from './add-compte/add-compte.component';
import { PartenaireOperationComponent } from './partenaire-operation/partenaire-operation.component';
import { ToastrModule } from 'ngx-toastr';
import { ContratComponent } from './contrat/contrat.component';
import { UserInterfaceComponent } from './user-interface/user-interface.component';

const routes: Routes = [
  
  {path: 'logout', component : LogoutComponent},
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
    HistoriqueOperationComponent,
    ImageUploadComponent,
    NavbarComponent,
    LogoutComponent,
    DepotComponent,
    PasswordChangeComponent,
    TransactionComponent,
    TransactionRetraitComponent,
    EditUserComponent,
    EditPartenaireComponent,
    AddCompteComponent,
    PartenaireOperationComponent,
    ContratComponent,
    UserInterfaceComponent

  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule,
    HttpModule,
    HttpClientModule,
    FormsModule,
    FontAwesomeModule,
    ReactiveFormsModule.withConfig({warnOnNgModelWithFormControl: 'never'}),
    BrowserAnimationsModule,
    MatTableModule,
    MatPaginatorModule,
    MatSortModule,
    MatFormFieldModule,
    MatInputModule,
    MatIconModule,
    MatButtonModule,
    MatOptionModule,
    MatSelectModule,
    MatToolbarModule,
    MatExpansionModule,
    ToastrModule.forRoot()
  ],
  providers: [AuthGuard,AuthService,Partenaire,
    { provide: HTTP_INTERCEPTORS,
      useClass: AuthInterceptor,
      multi: true 
    }

  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
